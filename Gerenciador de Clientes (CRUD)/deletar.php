<?php
include_once("./conexao.php");
include_once("./includes/header.php");
?>

<h1>Deletar usuário</h1>
<div class="main">
  <div class="dados-usuario">
    <?php
    $id = $_GET['id'];
    $sql_select = "SELECT * FROM clientes WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $sql_select);
    $dados = mysqli_fetch_array($resultado);
    ?>
  </div>

  <div class="formulario-container">
    <form action="./deletarConfirmar.php" method="post">
      <div class="campo-container">
        <label for="nome">Nome </label>
        <input disabled type="text" value="a" id="nome" name="nome" value="<?php echo $dados['nome'];?>">
      </div>

      <div class="campo-container">
        <label for="nome">Sobrenome </label>
        <input disabled type="text" id="sobrenome" name="sobrenome" value="<?php  echo $dados['sobrenome'];?>">
      </div>

      <div class="campo-container">
        <label for="nome">Email </label>
        <input disabled type="email" id="email" name="email" value="<?php  echo $dados['email'];?>">
      </div>

      <div class="campo-container">
        <label for="nome">Idade </label>
        <input disabled type="number" id="idade" name="idade" value="<?php  echo $dados['idade'];?>">
      </div>

      <input type="hidden" name="id" value="<?php echo $dados['id'];?>">

      <div class="botao-container">
        <input type="submit" name="deletar" value="Deletar">
        <a href="./index.php">Voltar</a>
      </div>
    </form>
  </div>
  </div>
</div>

<?php
include_once("./includes/footer.php");
?>
