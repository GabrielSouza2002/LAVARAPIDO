<?php
 /*1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)*/
 
 //$con= mysqli_connect("localhost","root","","bd_lavarapido");
 include "conexao.php";
 
  /*2- pegando os dados vindos do formulario e armazenando em variaveis */
  
  $nome= $_POST["nome"];
  $rg= $_POST["rg"];
  $cpf=$_POST["cpf"];
  $email= $_POST["email"];

  /*3- criando o comando sql para insercao do registro */
  
  $comandoSql="insert into tb_cliente
  (nome_cliente,rg_cliente,cpf_cliente,email_cliente)
  values
  ('$nome','$rg','$cpf','$email')";

  /*4- executando o comando sql */
  
  $resultado=mysqli_query($con,$comandoSql);

  /*5- verificando se o comando sql foi executado */
  
  if($resultado==true){
    echo"Cadastrado com Sucesso!";
    echo "<br><a href=frm_cliente.php > Novo Cliente </a>";
  }
    else  
    echo"Erro no Cadastro";

?>