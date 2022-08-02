<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Alteração de Funcionário</title>
	
 
</head>
	<body>
     <?php
	 //1- pegando o valor vindo da url
	 $id_funcionario=$_GET["id"];
	 
	 //2-realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)
     //$con =mysqli_connect("localhost","root","","bd_lavarapidob");
	 include "conexao.php";


	 //3- criando o comando sql para listar os dados do cliente selecionado  
	 $comandoSql="select * from tb_funcionario where id_funcionario='$id_funcionario'";
	 
	 //4-executando o comando sql 
	 $resultado=mysqli_query($con,$comandoSql);

	 //5-pegando os dados da consulta criada e armazenando em variaveis
	 $dados=mysqli_fetch_assoc($resultado);

	 $nome=$dados["nome_funcionario"];
	 $cpf=$dados["cpf_funcionario"];
	 $convenio=$dados["convenio_funcionario"];
	 $cidade=$dados["cidade_funcionario"];
	 $civil=$dados["civil_funcionario"];
	 ?>

	 <!--6-preenchendo o formulario com os dados da consulta -->
	 <h3> Alteração de funcionario </h3>
	 <form action="altera_funcionario.php" method="POST">
	    
	  <label for="id"> Id </label>
	  <input readonly type="text" id="id" name="id" value="<?php echo $id_funcionario	?>">

		<label for="nome"> Nome </label>
		<input type="text" id="nome" name="nome" value="<?php echo $nome?>">

		<label for="cpf"> CPF </label>
		<input type="text" id="cpf" name="cpf" value="<?php echo $cpf?>">
        
		
		<input type="checkbox" id="convenio" name="convenio" <?php 
		if($convenio==1)
		echo "checked=checked";
		?>>
        <label for="convenio"> Convênio  </label>
		
        <label for="cidade"> Cidade </label>
	    <select name="cidade">
        <option value="Rio Preto" <?php if($cidade=="Rio Preto")
		echo "selected=selected";?> >Rio Preto</option>
		
        <option value="Mirassol" <?php if($cidade=="Mirassol") echo "selected=selected";?>>Mirassol</option>
		
	
        <option value="Nova Granada"<?php if($cidade=="Nova Granada")
		echo "selected=selected"; ?> >Nova Granada</option>
		
	
        <option value="Cedral"<?php if($cidade=="Cedral")
		echo "selected=selected"; ?> >Cedral</option>
	
      </select>	

      <input type="radio" id="civil1" name="civil" value="casado"<?php if($civil=="casado") echo "checked=checked";?>>
      <label for="civil"> Casado </label>
	  
	  <input type="radio" id="civil2" name="civil" value="solteiro"<?php if($civil=="solteiro") echo "checked=checked";?>>
      <label for="civil"> Solteiro </label>
	  
	  <input type="radio" id="civil3" name="civil" value="outro" <?php if($civil=="outro") echo "checked=checked";?>>
      <label for="civil"> Outro </label>	  

		<input type="submit" value="Alterar">

    </form>

	</body>
</html>