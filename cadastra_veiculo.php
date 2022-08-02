<?php
 /*1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)*/
 
 include "conexao.php";

  /*2- pegando os dados vindos do formulario e armazenando em variaveis */
  
$nome=$_POST["nome"];
$modelo=$_POST["modelo"];
$placa=$_POST["placa"];
$cod_cliente=$_POST["cod_cliente"];

  /*3- criando o comando sql para insercao do registro */
  $comandoSql="insert into tb_veiculo (nome_veiculo, modelo_veiculo, placa_veiculo, cod_cliente)
  values ('$nome', '$modelo', '$placa',$cod_cliente)";

 
  /*4- executando o comando sql */
  $resultado=mysqli_query($con,$comandoSql);

  /*5- verificando se o comando sql foi executado */
  if($resultado==true){
    echo "Cadastrado com sucesso";
    echo "<br><a href=lista_veiculo_tabela.php> Listagem de veiculo</a>";
  }
	 
  else
	  echo "Erro no cadastro";

  
?>