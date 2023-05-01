<?php
include ('menu.html');
include ('conexao.php');

?>

<form action="insercao_usuario.php" method="post">
    <label for="codigo">Código</label>
    <input type="text" name="codigo"></br>

    <label for="login">Login</label>
    <input type="text" name="login"></br>


    <label for="senha">Senha</label>
    <input type="text" name="senha"></br>

    <label for="idCliente">ID Cliente</label>
    <select name="idCliente" id="idCliente">
        <option value=""></option>


        <?php
        $sql="SELECT idCliente, nome FROM cliente";
        $result = $conn->query($sql);
        if ($result->rowCount() > 0){
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo '<option value=" '.$row['idCliente'].'">'.$row['nome'].'</option>';
            }
        }
        ?>


    </select>
    <input type="submit" value="cadastrar">
    </form>


