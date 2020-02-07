<html>
    <head>
        <title> Cadastro Carro</title>
       
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="css/listar_registro_style.css" media="screen" />
        <script src="js/script.js"></script>
    </head>
    <body>
        
        <div class="container">
            <div class="campo">
                <div class="botao" > 
                    <input  type="submit" value="<"                  onClick="Home()"      class="central"> 
                    <input  type="submit" value="Carros Cadastrados" onClick="Lista_Carro()" class="central">                 
                </div>
                <br>
                
                <form action="insert_carro.php" method="POST">
                    <div>
                        <input type="text" name="placa" id="placa"  placeholder="Digite a placa do veículo">
                    </div>
                    
                    <div>
                        <input type="text" name="modelo" placeholder="Digite o modelo do veículo">
                    </div>
                    
                    <div>
                        <input type="text" name="ano"    placeholder="Digite o ano do veículo">
                    </div>

                    <div>
                        <input type="text" name="cor"    placeholder="Digite a cor do veículo">
                    </div>
                    
                    <div class="botao_cadastro" > 
                        <input type="submit" value="Salvar">
                    </div>                
                </form>                            
            </div>
        </div>

    </body>
    
</html>