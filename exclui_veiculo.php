<?php
  //1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)
 
 include "conexao.php";
  
  //2- pegando o valor vindo da url
  $id_veiculo=$_GET["id"];
  
  //3-criando o comando sql para exclusao do registro
  $comandoSql="delete from tb_veiculo where id_veiculo='$id_veiculo'";
  
  //4-executando o comando sql
  $resultado=mysqli_query($con,$comandoSql);
  
  //5-verificando se o comando sql foi executado
  if($resultado==true){
	echo "Excluido com sucesso";
    echo "<a href=lista_veiculo_tabela.php> Listar veiculos </a>";	
  }else{
	echo "Erro na exclusão"; 
  }
?>