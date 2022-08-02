<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de veiculo</title>
</head>
<body>
<table border>
<tbody>
	<tr>
		<td>Id</td>
		<td>Nome</td>
		<td>Modelo</td>
		<td>Placa</td>
		<td>Cliente</td>
		<td>Excluir</td>
		<td>Alterar</td>
    </tr>



    
<?php
   echo "<h3>  Listagem de veiculos </h3>";
   //1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)
  
   include "conexao.php";
   
   /*2- criando o comando sql para consulta  dos registros*/
   $comandoSql="select id_veiculo, nome_veiculo, modelo_veiculo, placa_veiculo, nome_cliente
   from tb_veiculo, tb_cliente
   where tb_cliente.id_cliente=tb_veiculo.cod_cliente";
   
 
   /*3- executando o comando sql */
   $resultado=mysqli_query($con,$comandoSql);
  
 
   /*4- pegando os dados da consulta criada e exibindo */
    while($dados=mysqli_fetch_assoc($resultado)){
     $id= $dados["id_veiculo"];
     $nome=$dados["nome_veiculo"];
     $modelo=$dados["modelo_veiculo"];
     $placa=$dados["placa_veiculo"];
     $cliente=$dados["nome_cliente"];
	      
     echo" <tr>
        <td>$id</td>
        <td>$nome</td>
        <td>$modelo</td>
        <td>$placa</td>
        <td>$cliente</td>
		 "?>
		 
        
        <td>
           <a href="exclui_veiculo.php?id=<?php echo $id ?>"
            onclick="return confirm('Deseja excluir realmente?' )">
           <img src='imagens/excluir.png'>
        </a>
      </td>
       
        <?php echo "
        <td><a href=frm_altera_veiculo.php?id=$id><img src='imagens/editar.png'> </a></td>
      </tr>";
   
 
 
    }

  

?>
  </tbody>
</table>

</body>
</html>