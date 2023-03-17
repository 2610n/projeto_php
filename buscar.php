<?php
require_once "conexao.php";
 $nome1=isset($_POST["busca"])?$_POST["busca"]:"sem consulta";

 if(Isset($nome1)){
   
    $consultar="SELECT *FROM CLIENTE WHERE nome like'$nome1%'";
     $buscar=mysqli_query($conexao,$consultar);
    
     while($resultado1=mysqli_fetch_array($buscar)){
   
        $id1=$resultado1["id_cliente"];
        $nome1=$resultado1["nome"];
        $telefone1=$resultado1["telefone"];
        $email1=$resultado1["email"];
    
        echo "<tr> 
            <td>$id1</td>
            <td>$nome1</td>
            <td>$telefone1</td>
            <td>$email1</td>
            <td><a href='editar.php?id=$id1'>Editar<a/></td>
            <td><a href='excluir.php?id=$id1'>Excluir<a/></td>
         
        </tr>";
    
    }
    
 
   

}
echo "<script>
window.location.href='filtro.php';
</script>";


?>