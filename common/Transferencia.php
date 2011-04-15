<?php

//require_once 'common/Referencia.php';

class Transferencia {

    private static $_instance;
    private $taxa = 2.00;
    private $valor = 0;
    private $receptor = null;
    private $id = null;
    private $modoDePagamento = null;
    private $modoDePagamentoEmissor = null;
    private $modoDePagamentoReceptor = null;
    private $cambio = 0;
    private $quadro = null;
    private $moedaEmissor = null;
    private $moedaReceptor = null;
    private $referencia = null;
    private $transferenciaConcluida = false;

    public static function verificaEstadoTransferencia($id) {

        global $DbSite;
        $sql = 'select estado from site.transferencia where id=' . $DbSite->quote($id);
        $result = $DbSite->getall($sql);
        $result = $result[0]->estado;
        return $result;
    }

    public function getTransferenciaConcluida() {
        return $this->transferenciaConcluida;
    }

    public function verificaValor($valor) {
        if (is_numeric($valor)) {
            if ($valor > 0) {
                $valor = number_format($valor, 2);
                $valor = floatval($valor);
                return $valor;
            }
        }
        return false;
    }

    public function getId() {
        global $DbTuga;
        if (!is_null($this->id)) {
            return $this->id;
        }
        $DbTuga->begin();
        $sql = 'select max(id) as id from site.transferencia;';
        $id = $DbTuga->getall($sql);
        $id = $id[0]->id;
        $sql = 'insert into site.transferencia(id,estado) values(' . ++$id . ',-1);';
        $result = $DbTuga->query($sql);
        if ($result) {
            $DbTuga->commit();
        } else {
            $DbTuga->rollback();
        }
        $this->id = $id;
        return $this->id;
    }

    public function getTaxa() {
        return (float) $this->taxa;
    }

    public function getMoedaEmissor($user) {
        global $DbTuga;
        if ($this->moedaEmissor == null) {
            $sql = '
				select miso_Cod_elite as id,pai_NombreMoneda as nome from clientes
				join hd_paises on hd_paises.pai_CodElite =clientes.CliNacionalidad
				join hd_monedasiso on hd_monedasiso.miso_ID =hd_paises.pai_NombreMoneda
				where clientes.CliNumero=' . $user->getId() . ';';
            //echo $sql.'';
            $result = $DbTuga->getall($sql);
            $this->moedaEmissor = $result[0];
        }
        //printArray($this->moedaEmissor);
        return $this->moedaEmissor;
    }

    public function getMoedaReceptor($user) {
        global $DbTuga;
        if ($this->moedaReceptor == null) {
            $sql = '
				select
				miso_Cod_elite   as id,
				pai_NombreMoneda as nome
				from officeschema.beneficiarios
				join officeschema.hd_paises on hd_paises.pai_CodElite = beneficiarios.BnfPais
				join officeschema.hd_monedasiso on hd_monedasiso.miso_ID = hd_paises.pai_NombreMoneda
				where beneficiarios.BnfNumero =' . $user->getId() . ';';
            $result = $DbTuga->getall($sql);
            $this->moedaReceptor = $result[0];
        }
        return $this->moedaReceptor;
    }

    public static function getInstance() {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    // Do not allow an explicit call of the constructor: $v = new Singleton();
    final private function __construct() {
        
    }

    // Do not allow the clone operation: $x = clone $v;
    final private function __clone() {

    }

    public function getQuadro() {
        if (is_null($this->quadro)) {
            $this->procuraTodasInformacoes();
        }
        return $this->quadro;
    }

    public function getDestinatario() {
        return $this->receptor;
    }

    public function setDestinatario($destinatario) {
        if (count($this->receptor) > 1) {
            foreach ($this->receptor as &$value) {
                if ($value[0]->id == $destinatario) {
                    $this->receptor = $value[0];
                    return $this->receptor;
                }
            }
        }
    }

    public function calculaCambio($cidade=null, $prioridade=null, $modoDePagamento=null, $moeda=null) {
        global $DbTuga;
        $sql = '
			select distinctrow
			  htr_ID,
			  htr_NombreTarifa         as tarifa,
			  htr_Tasa                 as taxa,
			  miso_Cod_Elite,
			  htr_MonPagoISO           as moeda,
			  CorrAlias,
			  CorrNumero,
			  hd_modospago.mp_ModoPago as modosDePagamento,
			  ciudades.CiuCiudad       as cidade,
			  ciudades.CiuNumero       as idcidade,
			  oficcorresp.OFIDCiudad   as idcidade,
			  oficcorresp.OFId         as agencia
			from hd_cambiosdia
			  join beneficiarios
				on beneficiarios.BnfPais = hd_cambiosdia.htr_Pais
			  join hd_monedasiso
				on hd_monedasiso.miso_ID = hd_cambiosdia.htr_MonPagoISO
			  join corresponsales
				on CorrNumero = htr_Corresponsal
			  join hd_tarifasorigem
				on Tarifa = htr_Tarifa
			  join tramoscorresponsal
				on tam_Corr = CorrNumero
			  join correspondente_cidade_modopago
				on (beneficiarios.BnfCiudad = correspondente_cidade_modopago.Cidade
					and correspondente_cidade_modopago.Correspondente = corresponsales.CorrNumero)
			  join hd_modospago
				on hd_modospago.mp_ID = correspondente_cidade_modopago.ModoPagamento
			  join ciudades
				on ciudades.CiuNumero = beneficiarios.BnfCiudad
			  left join oficcorresp
				on oficcorresp.OFCorr = correspondente_cidade_modopago.Correspondente
				  and oficcorresp.OFIDCiudad = beneficiarios.BnfCiudad
			where beneficiarios.BnfNumero = ' . $this->receptor->id . '
				and htr_MCobro = 1
				and Origem = 880
				and (100 * htr_Tasa between htr_DDesde
					 and htr_DHasta
					  or htr_DHasta = 0)
			';

        if ($modoDePagamento != null) {
            $sql = $sql . ' and correspondente_cidade_modopago.modoPagamento=' . $modoDePagamento;
        }
        if ($prioridade != null) {
            $sql = $sql . ' and htr_ID=' . $prioridade;
        }
        if ($cidade != null) {
            $sql = $sql . ' and beneficiarios.BnfCiudad=' . $cidade;
        }
        if ($moeda != null) {
            $sql = $sql . ' and hd_monedasiso.miso_Cod_elite=' . $moeda;
        }
        $sql = $sql . ' order by taxa desc; ';
        //echo ''.$sql.''.'';
        $cambio = $DbTuga->getall($sql);
        //printArray($cambio);
        $this->cambio = $cambio;
        return $cambio;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function getModosDeCobranca() {
        if ($this->modoDeCobranca == null) {
            global $DbTuga;
            $sql = '
				select officeschema.origenes.OriOrden as id, officeschema.origenes.OriNombre as nome
				from officeschema.origenes
				where officeschema.origenes.OriDominio=126;';
            $this->modoDeCobranca = $DbTuga->getall($sql);
        }
        return $this->modoDeCobranca;
    }

    public function getModosDePagamento() {
        if ($this->modoDePagamento == null) {
            global $DbTuga;
            $sql = 'select mp_ModoPago as nome,mp_ID as id from hd_modospago;';
            $this->modoDePagamento = $DbTuga->getall($sql);
        }
        return $this->modoDePagamento;
    }

    public function setModoDeCobranca($modoDeCobranca) {
        $this->modoDeCobranca = $modoDeCobranca;
    }

    public function setModoDePagamentoReceptor($modoDePagamento) {
        $this->modoDePagamentoReceptor = $modoDePagamento;
    }

    public function getModoDePagamentoEmissor() {
        return $this->modoDePagamentoEmissor;
    }

    public function getModoDePagamentoReceptor() {
        global $DbTuga;

        if ($this->modoDePagamentoReceptor == null) {
            $id = $this->getCambio();
            //printArray($id);
            $id = $id->htr_ID;
            //echo $id;
            $sql = '
				select htr_MCobro as id, mp_ModoPago as nome
				from officeschema.hd_cambiosdia
				join  hd_modospago on hd_modospago.mp_ID=hd_cambiosdia.htr_MCobro
				where htr_ID=' . $id . ';';
            //echo $sql.'';
            $result = $DbTuga->getall($sql);
            //printArray($result);
            $result = $result[0];
            $this->setModoDePagamentoReceptor($result);
            //echo $result;
        }
        //echo 'ola';
        return $this->modoDePagamentoReceptor;
    }

    public function setCambio($idCambio) {
        //printArray($this->cambio);
        if (count($this->cambio) > 1) {
            foreach ($this->cambio as &$value) {
                if ($value->htr_ID == $idCambio) {
                    $this->cambio = $value;
                    return;
                }
            }
        }
    }

    public function getCambio() {
        return $this->cambio;
        //return $this->cambio->taxa;
    }

    public function getReceptor() {
        return $this->receptor;
    }

    public function getDestinatarios() {
        return $this->destinatarios;
    }

    private function procuraTodasInformacoes() {
        global $DbTuga;
        $sql = '
		select ciudades.CiuCiudad as cidade,ciudades.CiuNumero as id from ciudades
		join hd_paises on hd_paises.pai_CodElite=ciudades.CiuPais
		join beneficiarios on beneficiarios.BnfPais=hd_paises.pai_CodElite
		where beneficiarios.BnfNumero= ' . $this->receptor->id;
        $cidades = $DbTuga->getall($sql);
        $sql = '
		select hd_cambiosdia.htr_ID as id,hd_cambiosdia.htr_NombreTarifa as prioridade from hd_cambiosdia;';
        $prioridade = $DbTuga->getall($sql);
        $sql = '
		select mp_ModoPago as nome,mp_ID as id from hd_modospago;';
        $modoDePagamento = $DbTuga->getall($sql);
        $sql = 'select  hd_monedasiso.miso_Cod_elite as id, hd_cambiosdia.htr_NombreMPago as moeda from hd_cambiosdia
		join beneficiarios on beneficiarios.BnfPais=hd_cambiosdia.htr_Pais
		join hd_monedasiso on hd_monedasiso.miso_ID=hd_cambiosdia.htr_NombreMPago
		where beneficiarios.BnfNumero = ' . $this->receptor->id . ' group by htr_NombreMPago;';
        $moeda = $DbTuga->getall($sql);
        $result['cidade'] = $cidades;
        $result['prioridade'] = $prioridade;
        $result['modoDePagamento'] = $modoDePagamento;
        $result['moeda'] = $moeda;
        $this->quadro = $result;
        return $this->quadro;
    }

    public function procuraDestinatarios($user) {
        global $DbTuga;
        $sql = '
		select
  officeschema.clientes.*,
  officeschema.beneficiarios.*,
  officeschema.hf_systypes.stpName as parentesco
from officeschema.clientes
  join officeschema.unionclientesbeneficiarios
    on officeschema.unionclientesbeneficiarios.uniCliente = officeschema.clientes.CliNumero
  join officeschema.beneficiarios
    on officeschema.beneficiarios.BnfNumero = officeschema.unionclientesbeneficiarios.uniBeneficiario
  join officeschema.hd_paises
    on officeschema.clientes.clpais = officeschema.hd_paises.pai_codelite
  join officeschema.hd_monedasiso
    on officeschema.hd_monedasiso.miso_id = officeschema.hd_paises.pai_nombremoneda
  join officeschema.beneficiarioscuentas
    on officeschema.beneficiarioscuentas.cb_Beneficiario = officeschema.beneficiarios.BnfNumero
  join officeschema.hf_systypes
    on officeschema.hf_systypes.stpAreaID = officeschema.unionclientesbeneficiarios.uniRelation
where officeschema.hf_systypes.stpGroup = 3
    and officeschema.clientes.CliNumero =' . $user->getId() . '
		order by officeschema.beneficiarios.BnfNumero asc';
        $sql = 'select
  officeschema.beneficiarios.BnfNumero        as id,
  officeschema.beneficiarios.BnfNombre        as nome,
  officeschema.beneficiarioscuentas.cb_Cuenta as conta,
  officeschema.hd_bancos.bp_id                as idbanco,
  officeschema.hd_bancos.bp_Name              as banco,
  officeschema.hd_paises.pai_CodElite         as idpais,
  officeschema.hd_paises.pai_NombreESP        as pais,
  officeschema.hf_systypes.stpName            as parentesco
from officeschema.clientes
  join officeschema.unionclientesbeneficiarios
    on officeschema.unionclientesbeneficiarios.uniCliente = officeschema.clientes.CliNumero
  join officeschema.beneficiarios
    on officeschema.beneficiarios.BnfNumero = officeschema.unionclientesbeneficiarios.uniBeneficiario
  join officeschema.hd_paises
    on officeschema.beneficiarios.BnfPais = officeschema.hd_paises.pai_codelite
  join officeschema.hd_monedasiso
    on officeschema.hd_monedasiso.miso_id = officeschema.hd_paises.pai_nombremoneda
  join officeschema.beneficiarioscuentas
    on officeschema.beneficiarioscuentas.cb_Beneficiario = officeschema.beneficiarios.BnfNumero
  join officeschema.hf_systypes
    on officeschema.hf_systypes.stpAreaID = officeschema.unionclientesbeneficiarios.uniRelation
  join officeschema.hd_bancos
    on officeschema.hd_bancos.bp_ID = officeschema.beneficiarioscuentas.cb_Banco
where officeschema.hf_systypes.stpGroup = 3
    and officeschema.clientes.CliNumero = ' . $user->getId() . '
order by officeschema.beneficiarios.BnfNumero asc;';

        //echo $sql;
        $result = $DbTuga->getall($sql);
        $this->receptor = $this->transformaDestinatariosPorConta($result);
        return $this->receptor;
    }

    private function transformaDestinatariosPorConta($result) {
        //printArray($result);
        $tamanho = count($result);
        $destinatarios = array();
        if ($tamanho > 0) {
            $contas = array();
            for ($i = 0, $nova = 0; $i < $tamanho; $i++, $nova++) {
                if ($i == 0) {
                    $destinatarios[$nova][0] = $result[$i];
                } else {
                    $j = 0;
                    for (; $result[$i]->id == $result[$i - 1]->id; $j++, $i++) {
                        $contas[$j] = $result[$i];
                    }
                    if (count($contas) == 0) {
                        $destinatarios[$nova][0] = $result[$i];
                    } else {
                        $contas[$j + 1] = $destinatarios[$nova - 1][0];
                        $destinatarios[$nova - 1] = $contas;
                        $destinatarios[$nova][0] = $result[$i];
                    }
                    $contas = array();
                }
            }
        }
        return $destinatarios;
    }

    public function save($estado=0) {
        global $DbSite, $user;
        if ($this->id != null) {
            //$this->cambio->agencia=1;
            $cambio = $this->getCambio()->taxa;
            $correspondente = $this->getCambio()->CorrNumero;
            $agencia = $this->getCambio()->agencia;
            $sql = "
				update site.transferencia set
				valor=" . $this->valor
                    . ',emissor=' . $user->getId()
                    . ',receptor=' . $this->receptor->id
                    . ',modoDeCobranca=' . $this->modoDeCobranca
                    . ',modoDePagamento=' . $this->modoDePagamentoReceptor->id
                    . ',cambio=' . $cambio
                    . ',correspondente=' . $correspondente
                    . ',tempo=' . $DbSite->quote(date('Y-m-d H:i:s'))
                    . ',estado=' . $estado
                    . ',valorAReceber=' . ($cambio) * $this->valor
                    . ',taxa=' . $this->getTaxa()
                    . ',moedaEmissor=' . $DbSite->quote($this->moedaEmissor->id)
                    . ',moedaReceptor=' . $DbSite->quote($this->moedaReceptor->id)
                    . ", conta=" . $DbSite->quote($this->receptor->conta);
            if ($agencia != null) {
                $sql = $sql . ", agencia=" . $DbSite->quote($agencia);
            }
            $sql = $sql . ", referencia='" . $this->referencia
                    . "' where id =" . $this->id . ';';
            //echo ''.$sql.'';
            //die();
            if ($DbSite->query($sql)) {
                /* Transferencia
                  Ao Terminar uma transferencia , o objecto que esxiste em sessão é destruido e criado um novo.
                  Pode-se fazer f5, que não irá fazer a mesma transferencia outra vez */
                $_SESSION['transferencia'] = array();
                $_SESSION['transferencia'] = $transferencia = Transferencia::getInstance();
                $this->transferenciaConcluida = true;
                $this->setModoDeCobranca(null);
                return true;
            } else {
                $this->transferenciaConcluida = false;
                return false;
            }
        }
    }

    public function estadosDasTransferencias() {
        global $DbTuga, $user;
        $sql = '
			select
			  referencia,
			  valor,
			  pai_NombreMoneda        as moeda,
			  beneficiarios.BnfNombre as receptor,
			  modoDeCobranca,
			  modoDePagamento,
			  cambio,
			  estado,
			  tempo,
			  valorAReceber
			from site.transferencia
			  join officeschema.beneficiarios
				on officeschema.beneficiarios.BnfNumero = site.transferencia.receptor
			  join officeschema.clientes
				on site.transferencia.emissor = officeschema.clientes.clinumero
			  join officeschema.hd_paises
				on officeschema.hd_paises.pai_CodElite = officeschema.clientes.CliNacionalidad
			where site.transferencia.emissor = ' . $user->getId() . '
			order by site.transferencia.id desc;';
        //echo ''.$sql.'';
        $estados = $DbTuga->getall($sql);

        foreach ($estados as &$value) {
            $sql = 'select officeschema.origenes.OriNombre as nome
					from officeschema.origenes
					where officeschema.origenes.OriDominio=126
					and officeschema.origenes.OriOrden =' . $value->modoDeCobranca;
            $result = $DbTuga->getall($sql);
            $result = $result[0]->nome;
            $value->modoDeCobranca = $result;
            $sql = 'select mp_ModoPago as nome
				from officeschema.hd_modospago
				where mp_id=' . $value->modoDePagamento;
            $result = $DbTuga->getall($sql);
            $result = $result[0]->nome;
            $value->modoDePagamento = $result;
        }

        //printArray($estados);
        return $estados;
    }

    public function getReferencia() {
        if (is_null($this->referencia)) {
            $this->referencia = Referencia::geraReferencia($this->getId(), $this->getValor());
        }
        return $this->referencia;
    }

}