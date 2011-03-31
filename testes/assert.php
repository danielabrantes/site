<?php
function assertEqual($a,$b){
	if($a==$b){
		echo 'true<br />';
	}else{
		echo 'false<br />';
	}
}
function assertTrue($a){
	if($a==true){
		echo 'true<br />';
	}else{
		echo 'false<br />';
	}
}
function assertFalse($a){
	if($a==false){
		echo 'true<br />';
	}else{
		echo 'false<br />';
	}
}