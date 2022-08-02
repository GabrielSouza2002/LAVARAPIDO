<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Cadastro de Clientes</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">

    

    

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
  </head>
  <body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 offset-md-30 py-4">
          <h4 class="text-white">Cadastros</h4>
          <ul class="list-unstyled">
            <li><a href="frm_funcionario.php" class="text-white">Cadastro de funcionários</a></li>
            <li><a href="frm_veiculo.php" class="text-white">Cadastro de veículos</a></li>
            <li><a href="frm_cliente.php" class="text-white">Cadastro de Clientes</a></li>
          </ul>
        </div>
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">Listas</h4>
          <ul class="list-unstyled">
          <li><a href="lista_cliente_tabela.php" class="text-white">Lista de Clientes</a></li>
            <li><a href="lista_funcionario_tabela.php" class="text-white">Lista de funcionários</a></li>
            <li><a href="lista_veiculo_tabela.php" class="text-white">Lista de veículos</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <strong>Lava Rápido Speeds</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <form action="cadastra_cliente.php" method="POST">
        <fieldset>
          <br>
          <br>
          <br>
          <br>

          <table class='table table-bordered border-primary'>
          <thead>
    <tr>
      <th scope='col'>ID</th>
      <th scope='col'>NOME</th>
      <th scope='col'>CPF</th>
      <th scope='col'>CONVENIO</th>
      <th scope='col'>CIDADE</th>
      <th scope='col'>CIVIL</th>
      <th scope='col'>ALTERAR</th>
      <th scope='col'>EXCLUIR</th>

    </tr>
  </thead>

          <?php

echo "<h3>  Listagem de Funcionários </h3><br>";
  //1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)
	//$con= mysqli_connect("localhost","root","","bd_lavarapido");
	include "conexao.php";
  
  /*2- criando o comando sql para consulta  dos registros*/
	$comandoSql=" select * from tb_funcionario";
  //para selecionar especificas é:  where id_cliente='3' or id_cliente='2'

  /*3- executando o comando sql */
 $resultado=mysqli_query($con,$comandoSql);

  /*4- pegando os dados da consulta criada e exibindo */
 while($dados=mysqli_fetch_assoc($resultado)){
	 $id=$dados["id_funcionario"];
	 $nome=$dados["nome_funcionario"];
	 $cpf=$dados["cpf_funcionario"];
	 $convenio=$dados["convenio_funcionario"];
	 $cidade=$dados["cidade_funcionario"];
     $civil=$dados["cidade_funcionario"];

echo "
    <tr>
      <td>$id</td>
      <td>$nome</td>
      <td>$cpf</td>
      <td>$convenio</td>
      <td>$cidade</td>
      <td>$civil</td>
      <td><a href=frm_altera_funcionario.php?id=$id><img src='../imagens/editar.png'></a></td>
      <td><a href=exclui_funcionario.php?id=$id><img src='../imagens/excluir.png'></a></td>
    </tr>";
     
 }
 ?>
          </table>
        </fieldset>
      </form>
    </div>
  </section>

</main>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
