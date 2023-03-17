<?php
session_start();
require_once "conexao.php";
$id=$_GET["id"];

$excluir="DELETE FROM CLIENTE WHERE ID_CLIENTE=$id";
mysqli_query($conexao,$excluir);

$_SESSION["mensagem"]="<p style='background-color:green;width: 200px;'>$id exluido com sucesso</p>";

header("location:index.php");
?>