<?php
    include "connect.php";
    $query = mysqli_query($link,"select * from carro");       
?>
<html>
    
    <head>
        <title>Carros Cadastrados</title>
        <meta charset="utf8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">        
        <link rel="stylesheet" type="text/css" href="css/listar_registro_style.css" media="screen" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="js/script.js"></script>
                
    </head>
    <body>
           
        <div class="container"> 
            <div class="campo">           
                <div class="botao"> 
                    <input  type="submit" value="<"  onClick="Insere_Carro()" class="central">  
                    

                    </div>
                        <table class="bordered striped centered" >
                    
                            <tr id="back">
                                    <td> PLACA  </td>
                                    <td> MODELO </td>
                                    <td> ANO    </td>
                                    <td> COR    </td>
                                    <td>        </td>
                            </tr>            
                
                            <?php while($dado = $query->fetch_array()){ ?>
                                <form action="editar_carro.php" method="POST">
                                
                                    <tr>
                                        <td><input readonly=“true” name="placa" value="<?php echo $dado["placa"] ?>"> </td>
                                        <td><?php echo $dado["modelo"] ?></td>
                                        <td><?php echo $dado["ano"   ] ?></td>
                                        <td><?php echo $dado["cor"   ] ?></td>
                                        <td>                                              
                                            <div class="botao" >                                           
                                                <input type="submit" id="Editar" value="Editar" src="editar_carro.php">                                                                                                                                           
                                            </div> 
                                                                                                    
                                    
                                            </form>
                                            <form action="exclui_carro.php" method="POST" >
                                                <div class="botao" >
                                                    <input type="hidden" readonly=“true” name="placa" value="<?php echo $dado["placa"] ?>">                                          
                                                    <input type="submit" id="Excluir" value="Excluir">
                                                </div>
                                            </form>  
                                        </td>
                                    <tr>
                            <?php  } ?>                                    
                        </table>                            
                    </div>
                </div>  
            </div>            
        </div>

            

    </body>
    
</html>
