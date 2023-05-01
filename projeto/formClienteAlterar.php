<?php


include ('menu.html');
include ('conexao.php');

$id = $_GET['id'];
$sql = "SELECT * FROM cliente WHERE idCliente=".$id;
$result = $conn->query($sql);

if ($result->rowCount() > 0 ){
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {

?>

<style>
    body {
      margin:0;
      padding:0;
      text-align: center;
      background: linear-gradient(#DFD5FB, #DFD5FB);
    }
    label {
    
      text-align: center;
      margin-bottom: 10px;
      display: block;
    }

    
    
    </style>
    <br>
    <hr>
    <br>
    <!--- dados do cadastro -->
    
      <form name="cadcliente" id="cadcliente" method="post" action="alterarCliente.php">
    
    <section class="row" id="cadastro">
        
      
            
            <div class="col-md-4">
                <label>ID Cliente:</label>
                <input type="text" name="nome" id="id" readonly value=<?php echo $row["idCliente"];  ?>
                
                
            </div>
            <div class="col-md-4">
                <label>Nome:</label>
                <input type="text" name="nome" id="nome" readonly value=<?php echo $row["nome"]; ?>
                
                
            </div>

            <div class="col-md-4">
                <label>Endereco:</label>
                <input type="text" name="endereco" readonly id="endereco" value=<?php echo $row["endereco"]; ?>>
                
                
            </div>
            
           
    
            
            <div class="col-md-2">
                <label>CPF:</label>
                <input  type="text" name="cpf" id="cpf" readonly value=<?php echo $row["cpf"]; ?> >
                
                
            </div>

            <div class="col-md-2">
                <label>RG:</label>
                <input  type="text" name="rg" id="rg" readonly value=<?php echo $row["rg"]; ?>>
                
                
            </div>
            

    </section>
    
          <br>
          <br>
          
          <section class=" text-center row" id="btngravar">
              
           <div class=""></div>
           
           <div class="">
             
               <button type="submit" class="button-85"></i> Alterar </button>
                   
               
           </div>
           
          
           
        </section>
        
        
    </form>
    <br>
    <hr>
    
    <?php
    }
}
?>
    
    
    
    
    
