<?php
session_start();
require_once "conexao.php";
$dados=$_FILES['arquivo']["tmp_name"];


$dados=file($dados);



$mensagem;
foreach($dados as $d){
     
    $d=trim($d); //elimina os espaços  no começo e no final 
    
    $valor=explode(',',$d);//ele cria um array colocando como parametro um separador 
    
  
    
    $nome = $valor[0];
    $telefone =$valor[1];
    $email=$valor[2];


             
    $inserir="INSERT INTO Cliente (nome,telefone,email) VALUES ('$nome','$telefone','$email')";
    $mensagem="<p style='color:green'>Dados importados com sucesso</p>";

    mysqli_query($conexao,$inserir);
    
    

}
$_SESSION["mensagem"]=$mensagem;
header("location:index.php");



?>