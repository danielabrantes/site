<?php

function stringToArray(/*string*/$numero/*array*/)
{
	$result=array();
	while($numero != null){
		$ultimo_numero=(int)substr($numero,0,1);
		$numero=substr($numero,1);
		array_push($result, $ultimo_numero);
	}
	return $result;
}
function verificaValor($valor)
{
	if(is_numeric($valor))
	{
		if($valor>0)
		{
			$valor=number_format($valor,2);
			$valor=floatval($valor);
			return $valor;
		}
	}
	return false;
}

function checkDigit(/*array*/$numero/*int*/)
{
	//$numero=array(9,0,1,5,0,1,2,3,1,2,3,4,0,0,0,4,3,2,1,1);
	$w=array(51,73,17,89,38,62,45,53,15,50,5,49,34,81,76,27,90,9,30,3);
	$p=array();
	for($i=0; $i<20; $i++)
	{
		$p[$i]=$w[$i]*$numero[$i];
	}
	$c=98-((array_sum($p))%97);
	return $c;
}

/*$entidade=90150;
 $referencia=1231234;
 $valor=432.11;
 $referenciaCorrecta=12312351;*/
function geraReferencia($entidade,$referencia,$valor)
{
	$valor=(string)$valor*100;
	$tamanho_final=8;
	$tamanho_real=strlen($valor);
	$diferenca=$tamanho_final -$tamanho_real;
	if($diferenca == 0)
	{
	}
	else{
		$valor=str_pad($valor, 8, "0", STR_PAD_LEFT);
	}
	return $referencia.(string)checkDigit(stringToArray($entidade.$referencia.$valor)) ;

}
$entidade=90150;
$referencia=1231234;
$valor=432.11;
echo geraReferencia($entidade,$referencia,$valor);
