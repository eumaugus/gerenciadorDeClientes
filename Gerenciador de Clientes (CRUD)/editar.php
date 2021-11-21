<?php
include_once("./conexao.php");
include_once("./includes/header.php");

if(isset($_GET['id']))
{
  $id = mysqli_escape_string($conexao, $_GET['id']);
}

$sql_select = "SELECT * FROM clientes WHERE id = '$id'";
$resultado = mysqli_query($conexao, $sql_select);
$dados = mysqli_fetch_array($resultado);
?>

<h1>Editar usuário</h1>

<div class="formulario-container">
  <form action="./atualizar.php" method="post">

    <div class="campo-container">
      <label for="nome">Nome </label>
      <input type="text" id="nome" name="nome" value="<?php echo $dados['nome'];?>">
    </div>

    <div class="campo-container">
      <label for="nome">Sobrenome </label>
      <input type="text" id="sobrenome" name="sobrenome" value="<?php echo $dados['sobrenome'];?>">
    </div>

    <div class="campo-container">
      <label for="nome">Email </label>
      <input type="email" id="email" name="email" value="<?php echo $dados['email'];?>">
    </div>

    <div class="campo-container">
      <label for="nome">Idade </label>
      <input type="number" id="idade" name="idade" min="0" max="99" value="<?php echo $dados['idade'];?>">
    </div>

    <div class="botao-container">
      <input type="submit" name="enviar-edicao" value="Atualizar">
      <a href="./index.php">Lista de Clientes</a>
    </div>

    <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
  </form>
</div>
