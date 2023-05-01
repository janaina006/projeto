<meta charset="UTF-8">

<?php

include('conexao.php');
include('menu.html');

$id = $_GET['id'];

try {
    $sql = "DELETE FROM usuario WHERE id_cliente=".$id;
    $conn->exec($sql);
    echo "Usuário Deletado com Sucesso!";
    
    $sql = "DELETE FROM cliente WHERE idCliente=".$id;
    $conn->exec($sql);
    echo "Cliente Deletado com Sucesso!";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }

  $conn = null;

?>