<?php
include_once("./conexao.php");
include_once("./includes/header.php");

session_start();
if(isset($_SESSION['mensagem']))
{
  echo "<div class='mensagem-container'>";
  echo "<p>"."<i class='fas fa-exclamation-circle'></i> ".$_SESSION['mensagem']."</p>";
  echo "</div>";

  session_unset();
}

?>

<h1>Clientes</h1>

<div class="tabela-container">
  <table>
    <thead>
      <tr>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>Email</th>
        <th>Idade</th>
      </tr>
    </thead>

    <tbody>
      <?php
        $sql_select = "SELECT * FROM clientes";
        $resultado = mysqli_query($conexao, $sql_select);
        while ($dados = mysqli_fetch_array($resultado))
        {
      ?>
      <tr>
        <td><?php echo $dados['nome'];?></td>
        <td><?php echo $dados['sobrenome'];?></td>
        <td><?php echo $dados['email'];?></td>
        <td><?php echo $dados['idade'];?></td>
        <td><a class="botaoTabela" href="./editar.php?id=<?php echo $dados['id'];?>"><i class="fas fa-edit"></i></a></td>
        <td><a class="botaoTabela" href="./deletar.php?id=<?php echo $dados['id'];?>"><i class="fas fa-trash"></i></a></td>
      </tr>
    <?php //Fim do While
      }
    ?>
    </tbody>
  </table>
</div>

<div class="botao-adicionar-container">
  <button type="button" name="botao-adicionar">
    <a href="./adicionar.php"><i class="fas fa-arrow-right"></i> Adicionar</a>
  </button>
</div>

<?php
include_once("./includes/footer.php");
?>
