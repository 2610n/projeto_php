<?php
$host="127.0.0.1";
$user="root";
$senha="";
$db="baseTeste";

$conexao=mysqli_connect($host,$user,$senha,$db);

if(mysqli_connect_error()){
    echo "erro ao se conectar com o banco de dados";
}


?>