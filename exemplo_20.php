<?php
 if(isset($_COOKIE['contador'])){
 	$tempo=time()+(3600*24*7);
 	$valor=$_COOKIE['contador']+1;
 	setcookie('contador', $valor, $tempo);
 }else{
 	$valor=1;
 	$tempo=time()+(3600*24*7);
 	setcookie('contador', $valor, $tempo);
 }
?>
<html>
<head>
	<meta charset='utf-8'>
	< Script >
	 Função  visita ( valor ) {
	 	Alerta (valor + ' visitas no site ' );
	 }
	< / Script >
</ Head >
	<? Php
	 	Echo  " <body onload = 'visita ( $ valor )'> " ;	 
	? >
</ Body >
</ Html >
