<?php
    include "connect.php";

    $placa  = $_POST['placa'];
    $modelo = $_POST['modelo'];
    $ano    = $_POST['ano'];
    $cor    = $_POST['cor'];

    $query = mysqli_query($link,"select * from registro where  placa = '$placa'
                                                     and    saida is NULL");
    $rows = mysqli_num_rows($query);

    if ($rows === 0){
         mysqli_query($link,"update carro set modelo  = '$modelo', 
                                                  ano = '$ano', 
                                                  cor = '$cor' 
                                                  where placa = '$placa'" );
      
            echo "<script>alert('Foi feita a atualização do veiculo da placa {$placa}');</script>";  
            echo "<script> document.location.href = 'listar_carro.php'; </script>";             
    }
    else{
        echo "<script>alert('Veículo da placa {$placa} está estacionado e não pode ser atualizado');</script>";
        echo "<script> document.location.href = 'listar_carro.php'; </script>";
        
    }
?>  