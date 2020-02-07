<html>
    <head>
        <title> Cadastro Registro</title>
        
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="css/listar_registro_style.css" media="screen" />
        <script src="js/script.js"></script>
    </head>
    <body>
            <div class="container">
                <div class="campo">
                    <div class="botao" > 
                        <input type="submit" value="<" onClick="Home()"    class="central"> 
                        <input type="submit" value="Estacionamento"     onClick="Estacionamento()" class="central">
                    </div>   
                    <form action="insert_registro.php" method="POST">
                        <div id="texto">
                            <input type="text" name="placa"  placeholder="Digite a placa do veículo">
                        </div> 
                        <div class="botao_cadastro">
                            <input type="submit" value="Registrar">
                        </div>
                    </form>                
                </div>        
                    
                    
            
                
            </div>


    </body>
    
</html>