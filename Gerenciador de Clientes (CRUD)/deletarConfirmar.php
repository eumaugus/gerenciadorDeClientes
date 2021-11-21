<?php
include_once("./conexao.php");
session_start();

$id = $_POST['id'];
$sql_delete = "DELETE from clientes WHERE id = '$id'";
$resultado = mysqli_query($conexao, $sql_delete);

if(isset($_POST['deletar']))
{
  if(mysqli_query($conexao, $sql_delete))
  {
    $_SESSION['mensagem'] = "Sucesso ao deletar!";
    header('Location: ./index.php');
  }

  else
  {
    $_SESSION['mensagem'] = "Erro ao deletar!";

  }
}
?>
