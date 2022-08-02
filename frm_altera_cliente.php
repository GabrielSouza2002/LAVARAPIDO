<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro de Cliente</title>
	
</head>
    <body>
    <?php
    //1 - Pegando o valor vindo da URL
    $id_cliente=$_GET['id'];

    //2 - realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)
    //$con= mysqli_connect("localhost","root","","bd_lavarapido");
    include "conexao.php";



    //3 - Criando o comando SQL para listar os dados do cliente selecionado
    $comandoSql=" select * from tb_cliente where id_cliente='$id_cliente'";

    //4 - Executando o comando SQL
    $resultado=mysqli_query($con,$comandoSql);

    //5 - Pegando os dados da consulta e armazenar em variáveis
    $dados=mysqli_fetch_assoc($resultado);

    $nome=$dados["nome_cliente"];
    $rg=$dados["rg_cliente"];
    $cpf=$dados["cpf_cliente"];
    $email=$dados["email_cliente"];

    ?>

<!-- Preenchendo o formulário com os dados da consulta -->
<h3> Alteração de Cliente</h3>
<form action="altera_cliente.php" method="POST">
    
<label for="id"> ID </label>
<input readonly type="text" id="id" name="id" value="<?php echo $id_cliente  ?>">

<label for="nome"> Nome </label>
<input type="text" id="nome" name="nome" value="<?php echo $nome ?>">

<label for="rg"> RG </label>
<input type="text" id="rg" name="rg" value="<?php echo $rg ?>">

<label for="cpf"> CPF </label>
<input type="text" id="cpf" name="cpf" value="<?php echo $cpf ?>">

<label for="email"> Email </label>
<input type="email" id="email" name="email" value="<?php echo $email ?>">
         

<input type="submit" value="Alterar">

</form>

    </body>
</html>