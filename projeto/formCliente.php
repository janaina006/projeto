<?php


include ('menu.html');
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
    <h3 class="text-center text">Cadastro de Cliente</h3>
    <br>
    <!--- dados do cadastro -->
    
      <form name="cadcliente" id="cadcliente" method="post" action="insercao_cliente.php">
    
    <section class="row" id="cadastro">
        
      
            
            <div class="col-md-4">
                <label>Nome:</label>
                <input type="text" name="nome" >
                
                
            </div>

            <div class="col-md-4">
                <label>Endereco:</label>
                <input type="text" name="endereco">
                
                
            </div>
            
           
    
            
            <div class="col-md-2">
                <label>CPF:</label>
                <input  type="text" name="cpf" >
                
                
            </div>

            <div class="col-md-2">
                <label>RG:</label>
                <input  type="text" name="rg" >
                
                
            </div>
            

    </section>
    
          <br>
          <br>
          
          <section class=" text-center row" id="btngravar">
              
           <div class=""></div>
           
           <div class="">
             
               <button type="submit" class="button-85"></i> Cadastrar </button>
                   
               
           </div>
           
          
           
        </section>
        
        
    </form>
    <br>
    <hr>
    
    
    
    
    
    
