<?php
function assertEqual($a,$b){
	if($a==$b){
		echo 'true';
	}else{
		echo 'false';
	}
}
function assertTrue($a){
	if($a==true){
		echo 'true';
	}else{
		echo 'false';
	}
}
function assertFalse($a){
	if($a==false){
		echo 'true';
	}else{
		echo 'false';
	}
}