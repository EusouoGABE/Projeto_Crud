<?php
    include "connect.php";

    $placa = $_POST['placa'];
    $query = mysqli_query($link, "select * from registro where  placa = '$placa'
                                                        and    saida is NULL");
                                                        
    $linha = mysqli_fetch_array($query);    
    $entrada = new DateTime($linha['entrada']);                                                   
    $saida = new DateTime();
    
    $entrada2  = $entrada->format('Y-m-d H:i:s');
    $saida2  = $saida->format('Y-m-d H:i:s');
                                    
    if ($entrada < $saida){  
        
        $diff = $entrada->diff($saida);

        $horas = $diff->h + ($diff->days * 24); 

        if ($diff->h === 0){
            $valor = 10;
            mysqli_query($link,"update registro set saida = '$saida2',valor = '$valor' where placa = '$placa'
                                                                                        and   entrada = '$entrada2'");
        }
        else{
            if ($diff->i >= 30){
                $horas = $horas + 1;
            }

            $valor = $horas * 10 ;
    
            mysqli_query($link,"update registro set saida = '$saida2',valor = '$valor' where placa = '$placa'
                                                                                        and   entrada = '$entrada2'");
        }
    }
    echo "<script>alert('Foi feita a saida do veiculo da placa {$placa}\\nE feito o pagamento no valor de R$ {$valor},00');</script>";
    echo "<script> document.location.href = 'listar_registro.php'; </script>";    
?>