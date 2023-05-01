<?php
    include ("conexao.php");

    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];

try {
 
  $sql = "INSERT INTO cliente (nome, endereco, cpf, rg )
  VALUES ('$nome', '$endereco', '$cpf', '$rg')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Novo registro criado com sucesso";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>