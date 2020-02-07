<?php
    include "connect.php";

    $placa = $_POST['placa'];
    
    $query = mysqli_query($link,"select * from registro where  placa = '$placa'
                                                        and    saida is NULL");
    $rows = mysqli_num_rows($query);

    if ($rows === 0){

        mysqli_query($link, "delete from carro where  placa = '$placa'");
        echo "<script> document.location.href = 'listar_carro.php'; </script>";
    }
    else{
        echo "<script>alert('Não foi possivel excluir o carro da placa: {$placa} pois ele está estacionado ');</script>";
        echo "<script> document.location.href = 'listar_carro.php'; </script>";
    }
?>