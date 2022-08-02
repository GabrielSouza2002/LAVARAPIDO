<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Alteração de veiculo</title>
	
 
</head>
	<body>

     <?php

include "funcoes_lista_cliente.php";
	
	
	//1- pegando o valor vindo da url
	 $id_veiculo=$_GET["id"];
	 
	 //2-realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)
     include "conexao.php";


	 //3- criando o comando sql para listar os dados do cliente selecionado  
	 $comandoSql="select * from tb_veiculo where id_veiculo='$id_veiculo'";
	 
	 //4-executando o comando sql 
	 $resultado=mysqli_query($con,$comandoSql);

	 //5-pegando os dados da consulta criada e armazenando em variaveis
	 $dados=mysqli_fetch_assoc($resultado);

	 $nome=$dados["nome_veiculo"];
	 $modelo= $dados["modelo_veiculo"];
	 $placa=$dados["placa_veiculo"];
	 $cliente=$dados["cod_cliente"];
	 ?>

	 <!--6-preenchendo o formulario com os dados da consulta -->
	 <h3> Alteração de veiculo </h3>
	 <form action="altera_veiculo.php" method="POST">
      
	  <label for="id"> Id </label>
      <input type="text" id="id" readonly name="id" value="<?php echo $id_veiculo ?>">

      <label for="nome"> Nome </label>
      <input type="text" id="nome" name="nome" value="<?php echo $nome ?>">

      <label for="modelo"> Modelo </label>
      <input type="text" id="modelo" name="modelo" value="<?php echo $modelo ?>">

      <label for="placa"> Placa </label>
      <input type="text" id="placa" name="placa" value="<?php echo $placa ?>">

      <label for="cliente"> Cliente </label>

	  <?php echo listaClienteSelectIdCli($cliente) ?>
	
	      	 

      <input type="submit" value="Alterar">

   </form>

	</body>
</html>