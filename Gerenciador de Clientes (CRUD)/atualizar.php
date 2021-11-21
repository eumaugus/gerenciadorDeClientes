<?php
  include_once("conexao.php");
  session_start();

  if(isset($_POST['enviar-edicao']))
  {
    $nome = mysqli_escape_string($conexao, $_POST['nome']);
    $sobrenome = mysqli_escape_string($conexao, $_POST['sobrenome']);
    $email = mysqli_escape_string($conexao, $_POST['email']);
    $idade = mysqli_escape_string($conexao, $_POST['idade']);
    $id = mysqli_escape_string($conexao, $_POST['id']);

    $sql_update = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade', id = '$id' WHERE id = '$id'";

    if($nome != "" && $sobrenome != "" && $email != "" && $idade != "")
    {
      if(mysqli_query($conexao, $sql_update))
      {
        header('Location: ./index.php');
        $_SESSION['mensagem'] = "Sucesso ao atualizar!";
      }
    }
    else
    {
      header('Location: ./index.php');
      $_SESSION['mensagem'] = "Erro ao atualizar!";
    }
  }
?>
