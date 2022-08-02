<?php
//1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)
//$con= mysqli_connect("localhost","root","","bd_lavarapido");
include "conexao.php";


//2 - pegando os dados vindos do formulário e armazenando em variaveis
$id=$_POST["id"];
$nome=$_POST["nome"];
$rg=$_POST["rg"];
$cpf=$_POST["cpf"];
$email=$_POST["email"];

//3 - Criando o comando SQL para alteração de registro
$comandoSql="update tb_cliente set nome_cliente='$nome',
rg_cliente='$rg',
cpf_cliente='$cpf',
email_cliente='$email' where id_cliente='$id'";

//4 - Executando o comando SQL
$resultado=mysqli_query($con,$comandoSql);

//5 - Verificando o comando SQL foi executado
if($resultado==true)
echo "Alteração foi concluida com Sucesso!";
else 
echo "Erro na ALteração!";

echo "<br> <a href=lista_cliente_tabela.php> Listar Clientes </a>";





?>