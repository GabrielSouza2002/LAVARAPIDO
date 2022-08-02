<?php 
 function listaClienteSelect(){

    //1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)
	//$con= mysqli_connect("localhost","root","","bd_lavarapido");
	include "conexao.php";
  
    /*2- criando o comando sql para consulta  dos registros*/
      $comandoSql=" select * from tb_cliente";
    //para selecionar especificas é:  where id_cliente='3' or id_cliente='2'
  
    /*3- executando o comando sql */
   $resultado=mysqli_query($con,$comandoSql);

   echo "<select name='cod_cliente'>";
  
    /*4- pegando os dados da consulta criada e exibindo */
   while($dados=mysqli_fetch_assoc($resultado)){
       $id=$dados["id_cliente"];
       $nome=$dados["nome_cliente"];
  
    echo "<option value=$id> $nome </option>";
     

   }
echo "</select>";



 }  //fim da funcao  listaClienteSelect()

 function listaClienteSelectIdCli($idCli){
// 1 - realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)
	//$con= mysqli_connect("localhost","root","","bd_lavarapido");
	include "conexao.php";

  // 2 - Criando o comando SQL para consulta dos registros
  $comandoSql= "select * from tb_cliente;";

  // 3 - Executando o comando SQL
  $resultado=mysqli_query($con,$comandoSql); 

  echo "<select name='cod_cliente'>";

  // 4 - Pegando os dados da consulta criada e exibindo
  while($dados=mysqli_fetch_assoc($resultado)){
    $id= $dados["id_cliente"];
    $nome= $dados["nome_cliente"];
    if ($idCli==$id)
      echo "<option value=$id selected=selected> $nome </option>";
    else
    echo "<option value=$id> $nome </option>";
    }
  echo "</selected>";
 }



?>