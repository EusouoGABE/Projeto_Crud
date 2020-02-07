<?php
    include "connect.php";

    $placa = $_POST['placa'];
    $sql = mysqli_query($link,"select * from carro where placa = '$placa'"); 
    $query1 = mysqli_query($link,"select * from registro where  placa = '$placa'
                                                         and    saida is NULL");
    $rows = mysqli_num_rows($query1);  
    if ($rows != 0){        
        echo "<script>alert('Veículo da placa {$placa} está estacionado e não pode ser atualizado');</script>";
        echo "<script> document.location.href = 'listar_carro.php'; </script>";
    }

?>

<html>
    <head>
        <title> Editar Carro</title>
        <script src="js/jquery-1.2.6.pack.js" type="text/javascript"></script>
        <script src="js/jquery.maskedinput-1.1.4.pack.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="css/listar_registro_style.css" media="screen" />
        <script src="js/script.js"></script>
    </head>
    <body>
        
        <div class="container">
            <div class="campo">
                <div class="botao" > 
                    <input  type="submit" value="<" onClick="Lista_Carro()" class="central"> 
                </div>
                <form action="update_carro.php" method="POST">
                    <?php $dado = $sql->fetch_array() ?>
                    <div class="id">
                        <input type= "text" readonly=“true” name="placa" value="<?php echo $dado["placa"] ?>">
                    </div>
                    
                    <div>
                        <input type="text" name="modelo"  placeholder="Digite a placa do veículo" value="<?php echo $dado["modelo"] ?>">
                    </div>
                    
                    <div>
                        <input type="text" name="ano"  placeholder="Digite a placa do veículo" value="<?php echo $dado["ano"] ?>">
                    </div>

                    <div>
                    <input type="text" name="cor"  placeholder="Digite a placa do veículo" value="<?php echo $dado["cor"] ?>"> 
                    </div>
                    
                    <div class="botao_cadastro" > 
                        <input type="submit" value="Salvar">
                    </div>                
                </form>                            
                
        </div>

    </body>
    
</html>