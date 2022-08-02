<?php
//1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)
//$con= mysqli_connect("localhost","root","","bd_lavarapido");
include "conexao.php";


//2 - Pegando o valor vindo da URL
$id_cliente= $_GET["id"];


//3 - Criando o comando SQL para exclusão do registro
$comandoSql= "delete from tb_cliente where id_cliente='$id_cliente'";


//4 - Executando o comando SQL
$resultado=mysqli_query($con,$comandoSql);


//5 - Verificar se o comando SQL foi executado
if($resultado==true){
    echo "Excluído com Sucesso!";
    echo "<br> <a href=lista_cliente.php>Listar Cliente</a>";
}else {
    echo "Não foi possível excluir esse ID!";
}




?>