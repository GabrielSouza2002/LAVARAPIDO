<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de funcionários</title>
</head>
<body>
<table border>
<tbody>
<tr>
<td>Id</td>
<td>Nome</td>
<td>CPF</td>
<td>convenio</td>
<td>Cidade</td>
<td>Civil</td>
</tr>


    <?php

echo "<h3>  Listagem de funcionários </h3>";
  //1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)
	//$con= mysqli_connect("localhost","root","","bd_lavarapido");
	include "conexao.php";
  
  /*2- criando o comando sql para consulta  dos registros*/
	$comandoSql=" select * from tb_funcionario";
  //para selecionar especificas é:  where id_cliente='3' or id_cliente='2'

  /*3- executando o comando sql */
 $resultado=mysqli_query($con,$comandoSql);

  /*4- pegando os dados da consulta criada e exibindo */
 while($dados=mysqli_fetch_assoc($resultado)){
	 $id=$dados["id_funcionario"];
	 $nome=$dados["nome_funcionario"];
	 $cpf=$dados["cpf_funcionario"];
	 $convenio=$dados["convenio_funcionario"];
	 $cidade=$dados["cidade_funcionario"];
     $civil=$dados["civil_funcionario"];

echo "
     <tr>
        <td>$id</td>
        <td>$nome</td>
        <td>$cpf</td>
        <td>$convenio</td>
        <td>$cidade</td>
        <td>$civil</td>
        <td><a href=.php?id=$id><img src='imagens/editar.png'></a></td>
        <td><a href=exclui_cliente.php?id=$id><img src='imagens/excluir.png'></a></td>
        
     </tr>";
     
 }
 ?>
 </tbody>
</table>

</body>
</html>