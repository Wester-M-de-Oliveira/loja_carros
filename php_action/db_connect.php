<?php
//Conexão com banco de dados

$servername="servidor_web_wester";
$username="wester";
$password="wester";
$db_name="loja_carros";


$connect =mysqli_connect($servername,$username,$password,$db_name);

mysqli_set_charset($connect,"utf8");

if(mysqli_connect_error()) :
    echo "Erro de Conexão: ". mysql_connect_error();
  endif;
?>