<?php
  include_once("conexao.php");
  session_start();

  if(isset($_POST['enviar-cadastro']))
  {
    $nome = mysqli_escape_string($conexao, $_POST['nome']);
    $sobrenome = mysqli_escape_string($conexao, $_POST['sobrenome']);
    $email = mysqli_escape_string($conexao, $_POST['email']);
    $idade = mysqli_escape_string($conexao, $_POST['idade']);

    $sql_insert = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

    if($nome != "" && $sobrenome != "" && $email != "" && $idade != "")
    {
      if(mysqli_query($conexao, $sql_insert))
      {
        header('Location: ./index.php');
        $_SESSION['mensagem'] = "Sucesso ao cadastrar!";
      }
    }
    else
    {
      header('Location: ./index.php');
      $_SESSION['mensagem'] = "Erro ao cadastrar!";
    }
  }
?>
