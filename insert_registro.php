<?php
    include "connect.php";

    $placa = $_POST['placa']; 
    
    $query = mysqli_query($link, "select * from carro where  placa = '$placa'");
                                                    
    $rows = mysqli_num_rows($query);
    if ($rows != 0)
    {
        
        $query = mysqli_query($link, "select * from registro where placa = '$placa'"); 
        $rows = mysqli_num_rows($query);

        if ($rows === 0) 
        {        
            $now = new DateTime();
            $datetime = $now->format('Y-m-d H:i:s');
            mysqli_query($link,"insert into registro values ('$placa','$datetime',null,null)");
            echo("<script>alert('Carro da placa: {$placa} foi registrado com sucesso');</script>");
            echo "<script> document.location.href = 'cadastro_registro.php'; </script>";
        }
        else 
        {
            $query = mysqli_query($link, "select * from registro where saida is NULL
                                                                AND placa = '$placa'"); 
            $rows = mysqli_num_rows($query);
            if ($rows === 0)
            {
                $now = new DateTime();
                $datetime = $now->format('Y-m-d H:i:s');
                mysqli_query($link,"insert into registro values ('$placa','$datetime',null,null)");
                echo("<script>alert('Carro da placa: {$placa} foi registrado com sucesso');</script>");
                echo "<script> document.location.href = 'cadastro_registro.php'; </script>";
            }
            else {
                echo "<script>alert('Carro da placa:  {$placa} já está estacionado');</script>";
                echo "<script> document.location.href = 'cadastro_registro.php'; </script>";
            }
        }


    }
    else
    {
    echo "<script>alert('O veículo não foi encontrado,\\n Cadastre o veiculo antes de dar entrada');</script>";
    echo "<script> document.location.href = 'cadastro_registro.php'; </script>";
    }

?>