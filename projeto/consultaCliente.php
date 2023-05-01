
<?php
include ('menu.html');
include ('conexao.php');


$sql = "SELECT idCliente, nome, endereco, cpf, rg FROM cliente";
$result = $conn->query($sql);

if ($result->rowCount() > 0) {

    echo "<table class='table table-bordered'>
    <thead>
      <tr>
        <th scope='col'>ID</th>
        <th scope='col'>NOME</th>
        <th scope='col'>ENDEREÇO</th>
        <th scope='col'>CPF</th>
        <th scope='col'>RG</th>
        <th scope='col'>AÇÃO</th>
      </tr>
    </thead>
    <tbody>";
    
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr >
            <td>".$row["idCliente"]."</td>
            <td>".$row["nome"]."</td>
            <td>".$row["endereco"]."</td>
            <td>".$row["cpf"]."</td>
            <td>".$row["rg"]."</td>
            <td>
            <a href='excluirCliente.php?id=".$row["idCliente"]."'> Excluir </a><br>
            <a href='formClienteAlterar.php?id=".$row["idCliente"]."'> Editar </a>
            
            </td>
            
            </tr>";
    }
    echo "</tbody></table>";

} else {
    echo "0 results";
}

?>