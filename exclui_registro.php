<?php
    include "connect.php";
    $placa   = $_POST['placa'  ];
    $entrada = $_POST['entrada'];

    mysqli_query($link, "delete from registro where placa   = '$placa'
                                            and   entrada = '$entrada' ");
    echo "<script> document.location.href = 'listar_registro.php'; </script>";

?>
    