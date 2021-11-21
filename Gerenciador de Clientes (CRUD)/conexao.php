<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "crudTeste";

$conexao = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error())
  echo "Houve erro na conexão!" . mysqli_connect_error();
