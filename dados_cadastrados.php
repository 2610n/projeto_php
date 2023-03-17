<?php
require_once "conexao.php";

$buscar_dados="SELECT *FROM CLIENTE";
$dados=mysqli_query($conexao,$buscar_dados);

while($resultado=mysqli_fetch_array($dados)){
   
    $id=$resultado["id_cliente"];
    $nome=$resultado["nome"];
    $telefone=$resultado["telefone"];
    $email=$resultado["email"];

    echo "<tr> 
        <td>$id</td>
        <td>$nome</td>
        <td>$telefone</td>
        <td>$email</td>
        <td><a href='editar.php?id=$id'>Editar<a/></td>
        <td><a href='excluir.php?id=$id'>Excluir<a/></td>
     
    </tr>";

}




?>