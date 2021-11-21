<?php
  include_once("./conexao.php");
  include_once("./includes/header.php");
?>

<h1>Novo Cliente</h1>

<div class="formulario-container">
  <form action="./funcao.php" method="post">
    <div class="campo-container">
      <label for="nome">Nome </label>
      <input type="text" id="nome" name="nome">
    </div>

    <div class="campo-container">
      <label for="nome">Sobrenome </label>
      <input type="text" id="sobrenome" name="sobrenome">
    </div>

    <div class="campo-container">
      <label for="nome">Email </label>
      <input type="email" id="email" name="email">
    </div>

    <div class="campo-container">
      <label for="nome">Idade </label>
      <input type="number" id="idade" min="0" max="99" name="idade">
    </div>

    <div class="botao-container">
      <input type="submit" name="enviar-cadastro" value="Enviar">
      <a href="./index.php">Lista de Clientes</a>
    </div>
  </form>
</div>

<?php
  include_once("./includes/footer.php");
?>
