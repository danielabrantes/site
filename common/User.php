<?php

class User {

    // Hold an instance of the class

    private $nome = null;
    private $dataDeNascimento = null;
    private $pass = '';
    private $cookie = '';
    private $id = null;
    private $CliNumero = null;
    private $logado = false;
    private $dados = null; //dados que vem do tuga
    private static $_instance;
    private $parentescos = null;
    private $destinatariosARemover = array();
    private static $pedidoDeAlteracaoDeDadosPessoais = false;
    private static $pedidoDeAlteracaoDeMorada = false;
    private static $pedidoDeAlteracaoDeDocumentos = false;
    private $seccao = null;
    private $novaConta = null;

    public function getModosDePagamento() {
        if ($this->modoDePagamento == null) {
            global $DbTuga;
            $sql = 'select mp_ModoPago as nome,mp_ID as id from hd_modospago;';
            $this->modoDePagamento = $DbTuga->getall($sql);
        }
        return $this->modoDePagamento;
    }

    public static function saveDestinatario($idUtilizador) {
        global $DbSite;

        $destinatario = $_POST['id'];
        $nomeDestinatario = $DbSite->quote($_POST['nomeDestinatario']);
        $parentesco = $DbSite->quote($_POST['parentesco']);
        $ruaDestinatario = $DbSite->quote($_POST['ruaDestinatario']);
        $bairroDestinatario = $DbSite->quote($_POST['bairroDestinatario']);
        $localidadeDestinatario = $DbSite->quote($_POST['localidadeDestinatario']);
        $provinciaDestinatario = $DbSite->quote($_POST['provinciaDestinatario']);
        $paisDestinatario = $DbSite->quote($_POST['paisDestinatario']);
        $telefoneDestinatario = $DbSite->quote($_POST['telefoneDestinatario']);
        $telemovelDestinatario = $DbSite->quote($_POST['telemovelDestinatario']);

        $sql = "
	  insert into site.destinatario
	  (idDestinatario,idUtilizador,accao,nome,rua,bairro,cidade,provincia,pais,telefone,telemovel,parentesco)
	  value (" . $destinatario . ',' . $idUtilizador . ",'actualizar',$nomeDestinatario,$ruaDestinatario,$bairroDestinatario,$localidadeDestinatario,$provinciaDestinatario,$paisDestinatario,$telefoneDestinatario,$telemovelDestinatario,$parentesco);";
        //echo '<br />'.$sql.'<br />';
        if ($DbSite->query($sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function getSenha() {
        return $this->pass;
    }

    public function setSenha($pass) {
        global $DbSite;
        $sql = 'update site.utilizador set password =' . $DbSite->quote($pass) . ' where id=' . $this->id . ';';
        //echo '<br />'.$sql.'<br />';
        $result = $DbSite->query($sql);
        if ($result) {
            $this->pass = $pass;
            return true;
        } else {
            return false;
        }
    }

    public static function getPaises() {
        global $DbSite;
        $sql = 'select pai_codelite as id, pai_nombreusd as nome from officeschema.hd_paises;';
        return $DbSite->getall($sql);
    }

    public static function getCidades() {
        global $DbSite;
        $sql = 'select ciunumero as id, ciuciudad as nome
			from officeschema.ciudades
			join officeschema.beneficiarios on officeschema.beneficiarios.BnfPais=officeschema.ciudades.CiuPais';
        return $DbSite->getall($sql);
    }

    public function getCidadesPorDestinatario() {
        global $DbTuga;
        $sql = '
			select ciunumero as id, ciuciudad as nome 
			from officeschema.ciudades
			join officeschema.beneficiarios on officeschema.beneficiarios.BnfPais=officeschema.ciudades.CiuPais
			where officeschema.beneficiarios.BnfNumero=' . $_POST['id'] . '
			;';
        return $DbTuga->getall($sql);
    }

    public function getNovaConta() {
        return $this->novaConta;
    }

    public function setNovaConta($value) {
        $this->novaConta = $value;
    }

    public function getSeccao() {
        return $this->seccao;
    }

    public function getBancosPorDestinatario() {
        global $DbTuga;
        //$_POST['destinatario'];
        $sql = '
		select officeschema.hd_bancos.bp_IdBanco as id,officeschema.hd_bancos.bp_Name as nome
		from officeschema.hd_bancos
		join officeschema.hd_paises on officeschema.hd_paises.pai_CodElite =officeschema.hd_bancos.bp_Country
		join officeschema.beneficiarios on officeschema.hd_paises.pai_CodElite =officeschema.beneficiarios.BnfPais
		where officeschema.beneficiarios.BnfNumero=' . $_POST['id'];
        /* echo $sql.'<br />';
          die; */
        return $DbTuga->getall($sql);
    }

    public function setSeccao($seccao) {
        $this->seccao = $seccao;
    }

    public function saveAdicionarConta() {
        /* echo saveAdicionarConta.'<br />'; */
        /* die; */
        global $DbSite;
        $conta = $DbSite->quote($_POST['numeroDeConta']);
        $destinatario = $DbSite->quote($_POST['id']);
        $agencia = $DbSite->quote($_POST['agencia']);
        $cidade = $DbSite->quote($_POST['localidade']);
        $banco = $DbSite->quote($_POST['banco']);
        $sql = "
		insert into site.destinatario
		(idDestinatario,idUtilizador,accao,idConta,cidade,agencia,idbanco) value
		(" . $destinatario . ',' . $this->id . ",'adicionarConta',$conta,$cidade,$agencia,$banco);";
        /* echo $sql.'<br />';
          die; */
        return $DbSite->query($sql);
    }

    public function saveRemoverConta() {
        global $DbSite;
        //echo 'saveRemoverConta';
        //printArray($_POST);
        $conta = $_POST['conta'];
        $destinatario = $_POST['id'];
        $sql = "
		insert into site.destinatario
		(idDestinatario,idUtilizador,accao,idConta)
		value (" . $destinatario . ',' . $this->id . ",'removerConta',$conta);";
        //echo $sql;
        if ($DbSite->query($sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function getDestinatariosARemover() {
        return $this->destinatariosARemover;
    }

    public function adicionaDestinatarioARemover($destinatario) {
        array_push($this->destinatariosARemover, $destinatario);
    }

    public function saveRemoverDestinatario() {
        global $DbSite;
        //echo 'saveRemoverDestinatario';
        $destinatario = $_POST['id'];
        $sql = "
		insert into site.destinatario
		(idDestinatario,idUtilizador,accao)
		value (" . $destinatario . ',' . $this->id . ",'remover');";
        //echo $sql;
        if ($DbSite->query($sql)) {
            return true;
        } else {
            return false;
        }
    }

    public static function getPedidoDeAlteracaoDeDadosPessoais() {
        return self::$pedidoDeAlteracaoDeDadosPessoais;
    }

    public static function getPedidoDeAlteracaoDeMorada() {
        return self::$pedidoDeAlteracaoDeMorada;
    }

    public static function getPedidoDeDocumentos() {
        return self::$pedidoDeAlteracaoDeDocumentos;
    }

    public function uploadDocumentos() {



        if ((!empty($_FILES["uploaded_file"])) && ($_FILES['uploaded_file']['error'] == 0)) {

            $filename = basename($_FILES['uploaded_file']['name']);
            $ext = substr($filename, strrpos($filename, '.') + 1);
            $path = substr(dirname(__FILE__), 0, -7) . '/documentos/' . $this->id . '/';
            $newname = $path . $filename;
            if (!file_exists($path)) {
                mkdir($path, 0777);
            }
            if ((move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $newname))) {
                return true;
            }
        }
        return false;
    }

    public static function uploadDocumentosStatic($numero) {
        if ((!empty($_FILES["uploaded_file"])) && ($_FILES['uploaded_file']['error'] == 0)) {
            $filename = basename($_FILES['uploaded_file']['name']);
            $ext = substr($filename, strrpos($filename, '.') + 1);
            $path = substr(dirname(__FILE__), 0, -7) . '/upload/' . $numero . '/';
            $newname = $path . $filename;
            if (!file_exists($path)) {
                mkdir($path, 0777);
            }
            if ((move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $newname))) {
                return true;
            }
        }
        return false;
    }

    public static function saveDocumentos() {
        global $DbSite;
        //printArray($_POST);
        $actividade = $DbSite->quote($_POST['actividade']);
        $meioDeConhecimento = $DbSite->quote($_POST['meioDeConhecimento']);
        $escolaridade = $DbSite->quote($_POST['escolaridade']);
        $estadoCivil = $DbSite->quote($_POST['estadoCivil']);
        $valorMensal = $DbSite->quote($_POST['valorMensal']);
        $origemVencimento = $DbSite->quote($_POST['origemVencimento']);
        $referenciaVencimento = $DbSite->quote($_POST['referenciaVencimento']);
        $tipo = $DbSite->quote($_POST['tipo']);
        $numero = $DbSite->quote($_POST['numero']);
        $dataDeEmissao = $DbSite->quote($_POST['dataDeEmissao']);
        $dataDeCaducidade = $DbSite->quote($_POST['dataDeCaducidade']);
        $orgaoRegisto = $DbSite->quote($_POST['orgaoRegisto']);
        $date = $DbSite->quote(date('Y-m-d H:i:s'));

        $DbSite->begin();
        $id = self::getMaxID('documentos');
        $sql = "
		  insert into site.documentos(id,actividade,meioDeConhecimento,escolaridade,estadoCivil,valorMensal,origemVencimento,referenciaVencimento,tipo,numero,dataDeEmissao,dataDeCaducidade,orgaoRegisto,data)
		  values(" . $id . "," . $actividade . "," . $meioDeConhecimento . "," . $escolaridade . "," . $estadoCivil . "," . $valorMensal . "," . $origemVencimento . "," . $referenciaVencimento . "," . $tipo . "," . $numero . "," . $dataDeEmissao . "," . $dataDeCaducidade . "," . $orgaoRegisto . "," . $date . ");";
        //echo '<br />'.$sql.'<br />';
        $result = $DbSite->query($sql);
        if ($result) {
            $DbSite->commit();
            self::$pedidoDeAlteracaoDeDocumentos = true;
            return $id;
        } else {
            $DbSite->rollback();
            return 0;
        }
    }

    public static function saveMorada() {
        global $DbSite;
        $rua = $DbSite->quote($_POST['rua']);
        $porta = $DbSite->quote($_POST['porta']);
        $piso = $DbSite->quote($_POST['piso']);
        $provincia = $DbSite->quote($_POST['provincia']);
        $concelho = $DbSite->quote($_POST['concelho']);
        $codigoPostal = $DbSite->quote($_POST['codigoPostal']);
        $localidade = $DbSite->quote($_POST['localidade']);
        $nacionalidade = $DbSite->quote($_POST['nacionalidade']);
        $naturalidade1 = $DbSite->quote($_POST['naturalidade1']);
        $naturalidade2 = $DbSite->quote($_POST['naturalidade2']);
        $pais = $DbSite->quote($_POST['pais']);
        $date = $DbSite->quote(date('Y-m-d H:i:s'));

        $DbSite->begin();
        $id = self::getMaxID('morada');
        $sql = "
		insert into site.morada(id,rua,porta,piso,provincia,concelho,codigoPostal,localidade,nacionalidade,naturalidade1,naturalidade2,pais,data)
		values(" . $id . "," . $rua . "," . $porta . "," . $piso . "," . $provincia . "," . $concelho . "," . $codigoPostal . "," . $localidade . "," . $nacionalidade . "," . $naturalidade1 . "," . $naturalidade2 . "," . $pais . "," . $date . ");";
        //echo '<br />'.$sql.'<br />';
        $result = $DbSite->query($sql);
        if ($result) {
            $DbSite->commit();
            self::$pedidoDeAlteracaoDeMorada = true;
            return $id;
        } else {
            $DbSite->rollback();
            return 0;
        }
    }

    private static function createRandomPassword() {
        $chars = "abcdefghijkmnopqrstuvwxyz0123456789";
        srand((double) microtime() * 1000000);
        $i = 0;
        $pass = '';
        while ($i <= 7) {
            $num = rand() % 33;
            $tmp = substr($chars, $num, 1);
            $pass = $pass . $tmp;
            $i++;
        }
        return $pass;
    }

    public static function geraPass($id) {
        global $DbSite;
        $pass = self::createRandomPassword();
        $sql = 'update site.utilizador set password =' . $DbSite->quote($pass) . ' where id=' . $id . ';';
        $result = $DbSite->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public static function enviaEmail($id) {

        global $DbSite;
        $sql = 'select email,password from site.utilizador where id=' . $id;
        //echo '<br />'.$sql.'<br />';
        $result = $DbSite->getall($sql);
        $pass = $result[0]->password;
        require_once "Mail.php";
        $from = "<no-reply@moneyexpress.pt>";
        $to = $result[0]->email;
        $subject = 'Pedido de senha';
        $body = 'O pedido de recuperação de senha para http://www.moneyone.pt/ foi verificado e validado com sucesso.'
                . 'Efectuar login com os seguintes dados: email: ' . $to . ' , senha: ' . $pass;


        $host = 'moneyexpress.pt';
        $username = 'no-reply@moneyexpress.pt';
        $password = 'panasca';
        $headers = array('From' => $from,
            'To' => $to,
            'Subject' => $subject);
        $smtp = Mail::factory('smtp', array('host' => $host,
                    'auth' => true,
                    'username' => $username,
                    'password' => $password));
        $mail = $smtp->send($to, $headers, $body);
    }

    public static function verificaExistenciaDeEmail($email) {
        global $DbTuga;
        $DbTuga->begin();
        $sql = 'select CliNumero as id,CLCttEmail as email  from clientes
			where CLCttEmail like ' . $DbTuga->quote($email) . ';';
        //printArray($sql);
        $result = $DbTuga->getall($sql);
        //printArray($result);
        if ($result) {
            $DbTuga->commit();
            return $result[0];
        } else {
            $DbTuga->rollback();
            return false;
        }
    }

    public static function saveUser() {
        global $DbSite;
        $dadosPessoais = self::saveDadosPessoais();
        $morada = self::saveMorada();
        $documentos = self::saveDocumentos();
        if ($dadosPessoais && $morada && $documentos) {
            $date = $DbSite->quote(date('Y-m-d H:i:s'));
            $email = $DbSite->quote($_POST['email']);
            $DbSite->begin();
            $id = self::getMaxID('utilizador');
            $sql = '
			insert into site.utilizador
			(id,email,dadosPessoais,morada,documentos,data)
			values(' . $id . ',' . $email . ',' . $dadosPessoais . ',' . $morada . ',' . $documentos . ',' . $date . ');';
            //echo '<br />'.$sql.'<br />';
            $result = $DbSite->query($sql);
            if ($result) {
                $DbSite->commit();
                self::$pedidoDeAlteracaoDeDadosPessoais = true;
                $from = 'no-reply@moneyexpress.pt';
                $to = $_POST['email'];
                $subject = 'MONEY ONE - CADASTRO DE USUÁRIO';
                $body = '
                    O seu cadastro foi submetido com sucesso.
                    Após verificação dos dados irá ser criada a sua ficha de cliente no nosso sistema.';
                Email::send($from, $to, $subject, $body);
                return $id;
            } else {
                $DbSite->rollback();
                return 0;
            }
        }
    }

    public static function getMaxId($tabela) {
        global $DbSite;
        $sql = 'select max(id) as id from site.' . $tabela;
        //echo $sql;
        $id = $DbSite->getall($sql);
        return $id[0]->id + 1;
    }

    public static function saveDadosPessoais($logado=false) {
        global $DbSite;
        if (!$logado) {
            $nome = $DbSite->quote($_POST['nome']);
            $dataDeNascimentoDia = $_POST['dataDeNascimentoDia'];
            $dataDeNascimentoMes = $_POST['dataDeNascimentoMes'];
            $dataDeNascimentoAno = $_POST['dataDeNascimentoAno'];
            $sexo = $DbSite->quote($_POST['sexo']);
            $dataDeNascimento = $DbSite->quote(date("$dataDeNascimentoAno-$dataDeNascimentoMes-$dataDeNascimentoDia"));
        }
        $telefone = is_numeric($_POST['telefone']) ? $DbSite->quote($_POST['telefone']) : 'null';
        $telemovel = is_numeric($_POST['telemovel']) ? $DbSite->quote($_POST['telemovel']) : 'null';
        $email = isset($_POST['email']) ? $DbSite->quote($_POST['email']) : 'null';
        $newsletter = isset($_POST['newsletter']) ? $DbSite->quote($_POST['newsletter']) : 'null';
        $date = $DbSite->quote(date('Y-m-d H:i:s'));
        $DbSite->begin();
        $id = self::getMaxID('dadospessoais');

        if (!$logado) {
            $sql = "
		insert into site.dadosPessoais(id,nome,dataDeNascimento,sexo,telefone,telemovel,email,newsletter,data)
		values(" . $id . "," . $nome . "," . $dataDeNascimento . "," . $sexo . "," . $telefone . "," . $telemovel . "," . $email . "," . $newsletter . "," . $date . ");";
        } else {
            //altera base de dados do site
            $sql = "
		insert into site.dadosPessoais(id,telefone,telemovel,email,newsletter,data)
		values(" . $id . "," . $telefone . "," . $telemovel . "," . $email . "," . $newsletter . "," . $date . ");";
        }
        /*
          echo '<br />'.$sql.'<br />';
          echo 'saveDadosPessoais';
          die;
         */

        $result = $DbSite->query($sql);
        if ($result) {
            $DbSite->commit();
            self::$pedidoDeAlteracaoDeDadosPessoais = true;
            return $id;
        } else {
            $DbSite->rollback();
            return 0;
        }
    }

    public function getParentescos() {
        if (!isset($parentescos)) {
            global $DbTuga;
            $sql = 'select
			hf_systypes.stpID as id,
			hf_systypes.stpName as parantesco
			from hf_systypes
			where hf_systypes.stpGroup=3;';
            $result = $DbTuga->getall($sql);
            $this->parentescos = $result;
        }
        return $this->parentescos;
    }

    public function getDados() {
        global $DbTuga;
        if (!isset($dados)) {
            $sql = '
			select
			officeschema.clientes.CliNombre as nome
			,officeschema.clientes.CliMap as sexo
			,officeschema.clientes.CliTipoDOC as tipoDocumento
			,officeschema.clientes.CliDNI as numeroDocumento
			,officeschema.hd_documentos.dtd_FechaEmision as dataDeEmissao
			,officeschema.hd_documentos.dtd_FechaCaducidad as dataDeCaducidade
			,officeschema.clientes.CliDomicilio as rua
			,officeschema.clientes.CliPortal as porta
			,officeschema.clientes.CliPisoPuerta as piso
			,officeschema.clientes.CliCiudad as concelho
			,officeschema.clientes.CliCP as codigoPostal
			,officeschema.clientes.CliProvincia as provincia
			,officeschema.clientes.CliLocation as localidade
			,officeschema.clientes.ClPais as pais
			,officeschema.clientes.CliTelefono as telefone
			,officeschema.clientes.CliTelefono2 as telemovel
			,officeschema.clientes.CliFechaNacimiento as dataDeNascimento
			,officeschema.clientes.CliNacionalidad as nacionalidade
			,officeschema.clientes.CliRes1 as naturalidade1
			,officeschema.clientes.CliRes2 as naturalidade2
			,officeschema.clientes.CliActividad as actividade
			,officeschema.clientes.CLCttEmail as email
			,officeschema.clientes.CliEstadoCivil as estadoCivil
			,
			officeschema.clientes.* , officeschema.hd_documentos.*
			from officeschema.clientes
			join officeschema.hd_documentos on officeschema.hd_documentos.dtd_Cliente=officeschema.clientes.CliNumero
			where officeschema.clientes.CliNumero=' . $this->id;
            $result = $DbTuga->getall($sql);
            $this->dados = $result[0];
        }
        //printArray($this->dados);
        return $this->dados;
    }

    public function getDataDeNascimento() {
        global $DbTuga;
        if (!isset($dataDeNascimento)) {
            $sql = '
			select officeschema.clientes.CliFechaNacimiento as dataDeNascimento from site.utilizador
			join officeschema.clientes on officeschema.clientes.CliNumero=site.utilizador.id
			where site.utilizador.id=' . $this->id;
            $result = $DbTuga->getall($sql);
            $this->dataDeNascimento = $result[0]->dataDeNascimento;
        }
        return $this->dataDeNascimento;
    }

    public function getNome() {
        global $DbTuga;
        if (!isset($nome)) {
            $sql = '
			select clinombre as nome from clientes
			where clinumero=' . $this->id;
            $result = $DbTuga->getall($sql);
            $this->nome = $result[0]->nome;
        }
        return $this->nome;
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

    function getlogado() {
        return $this->logado;
    }

    public function utilizador($nome, $pass) {
        $this->nome = $nome;
        $this->pass = $pass;
    }

    public function getId() {
        return $this->id;
    }

    /* Cria uma nova sessaõ para o utlizador que existe na base de dados
     * */

    function check_user($nome, $pass) {
        global $DbSite;
        $sql = 'SELECT * FROM site.utilizador WHERE email=' . $nome . ' AND password=' . $pass;
        $result = $DbSite->getall($sql);
        if (count($result) == 1) {
            $this->id = $result[0]->id;
            $this->CliNumero = $result[0]->CliNumero;
            $this->nome = $result[0]->email;
            $this->pass = $result[0]->password;
            $this->cookie = $_COOKIE['moneyexpress'];
            $this->logado = true;
            //inserir no historico
            return true;
        } else {
            die('não encontrou o utilzador na base de dados');
            return false;
        }
    }

}