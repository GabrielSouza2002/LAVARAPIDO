<?php
	//1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)
	include "conexao.php";

	//2-pegando os dados vindos do formulario e armazenando em variaveis
	
	$id=$_POST["id"];
	$nome=$_POST["nome"];
	$modelo=$_POST["modelo"];
	$placa=$_POST["placa"];
	$cod_cliente=$_POST["cod_cliente"];

	//3-criando o comando sql para alteração de registro 

	$comandoSql="update tb_veiculo set nome_veiculo='$nome', modelo_veiculo='$modelo', placa_veiculo='$placa', cod_cliente=$cod_cliente where id_veiculo=$id";

	//4-executando o comando sql
	$resultado=mysqli_query($con,$comandoSql);

	//5-verificando se o comando sql foi executado
	if($resultado==true)
	  echo "Alterado com sucesso";
	else
	  echo "Erro na alteração";

	  echo "<br> <a href=lista_veiculo_tabela.php> Listar veiculos </a>";

?>