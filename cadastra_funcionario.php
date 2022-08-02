<?php

//*1 - realizando a conexao com o banco de dados

include "conexao.php";

//2 - pegando os dados vindos do formulario e armazenando em variaveis

$nome=$_POST["nome"];
$cpf=$_POST["cpf"];

//para verificar se  o objero checkbox esta clicado é necessário usar a função isset() do php, esta função verifica se o objeto esta setado(clicado).

if (isset($_POST["convenio"]))
    $convenio=1;
else    
    $convenio=0;

$cidade=$_POST["cidade"];
$civil=$_POST["civil"];

//3 - criando o comando sql para inserção do registro

$comandoSql="insert into tb_funcionario (nome_funcionario, cpf_funcionario, convenio_funcionario, cidade_funcionario, civil_funcionario) values ('$nome', '$cpf', '$convenio', '$cidade' ,'$civil')";

//4 - executando o comando sql
$resultado=mysqli_query($con,$comandoSql);

//5 - verificando se o comando sql foi executado
if($resultado==true){
    echo "Cadastrado com sucesso";
    echo "<br><a href=lista_funcionario.php > lista de funcionarios </a>";
}

else

echo "Erro no cadastro";



?>