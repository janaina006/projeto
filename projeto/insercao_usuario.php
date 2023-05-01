<?php
    include ("conexao.php");

    $idUsuario = $_POST['codigo'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $id_cliente = $_POST['idCliente'];
   

try {
 
  $sql = "INSERT INTO usuario (idUsuario, login, senha, id_cliente )
  VALUES ($idUsuario, '$login', '$senha', $id_cliente)";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Novo registro criado com sucesso";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>