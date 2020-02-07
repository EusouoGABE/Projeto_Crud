function Lista_Carro()
{
    location.href="listar_carro.php"
}

function Insere_Carro()
{
    location.href=" cadastro_carro.php"
}

function Estacionamento()
{
    location.href=" listar_registro.php"
}
function Insere_Registro()
{
    location.href=" cadastro_registro.php"
}
function Home()
{
    location.href=" index.php"
}
$(document).ready(function(){	
    $("#placa").mask("999-9999");
});