<?php

	include "Calculator.php";

	$method = $_SERVER['REQUEST_METHOD'];

	if($method!= 'POST' && $method!= 'GET'  && $method!= 'PUT'){
		$retVal = 'Error! we know  to deal only  with post , get or put'; 
        $a = array('retVal'=>$retVal);
        header('Content-Type: application/json');
        echo json_encode($a); 
}

	$calc = new Calculator();
	$calc->type_http_verbs($method);
	$res = $calc->calculate();
	$a = array('res'=>$res);
	header('Content-Type: application/json');
	echo json_encode($a); 

?>