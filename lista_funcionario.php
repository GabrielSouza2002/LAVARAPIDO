<?php

   echo "<h3>  Listagem de funcionário </h3>";
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
	 $cpf=$dados["cpf_cliente"];
	 $convenio=$dados["convenio_funcionario"];
	 $civil=$dados["civil_funcionario"];


		echo "<br>id: $id";
		echo "<br>Nome: $nome";
		echo "<br>CPF: $cpf";
		echo "<br>Convênio: $convenio";
		echo "<br>Civil: $civil<br>";
		echo "<a href=exclui_funcionario.php?id=$id>Excluir</a>";
		echo "<br><a href=frm_altera_funcionario.php?id=$id>Alterar</a>";

		echo"<hr>";
 
 
 }
?>