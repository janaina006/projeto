<?php
include ('conexao.php');
include ('menu.html');

$sql = "SELECT *
FROM cliente join usuario on cliente.idCliente = usuario.id_cliente
WHERE cliente.idCliente = usuario.id_cliente;";
$result = $conn->query($sql);

if ($result->rowCount() > 0) {
    echo "<table class='table table-striped'>
    <thead class='thead-dark'>
    <tr>
    <th>ID CLIENTE</th>
    <th>NOME</th>
    <th>ENDEREÇO</th>
    <th>CPF</th>
    <th>RG</th>
    <th>ID USUARIO</th>
    <th>LOGIN</th>
    <th>SENHA</th>
    <th>ID CLIENTE</th>
    </tr>
    </thead>
    <tbody>
    ";
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
            <td>".$row["idCliente"]."</td>
            <td>".$row["nome"]."</td>
            <td>".$row["endereco"]."</td>
            <td>".$row["cpf"]."</td>
            <td>".$row["rg"]."</td>
            <td>".$row["idUsuario"]."</td>
            <td>".$row["login"]."</td>
            <td>".$row["senha"]."</td>
            <td>".$row["id_cliente"]."</td>
            </tr>";
    }
    echo "</tbody></table>";
} else {
    echo "0 results";
}
?>