<?php
	include "connect.php";

	$placa = $_POST['placa'];
	$modelo = $_POST['modelo'];
	$ano    = $_POST['ano'];
	$cor    = $_POST['cor'];
	mysqli_query($link,"insert into carro(placa,modelo,ano,cor)values('$placa','$modelo','$ano','$cor')");	

	if(mysqli_errno($link)) 
	{	

		echo "<script>alert('Não foi possivel efetuar o registro do veículo: {$placa}');</script>";
		echo "<script> document.location.href = 'cadastro_carro.php'; </script>";
	} 
	else 
	{
		echo "<script>alert('Foi efetuado o registro do veiculo da placa {$placa}');</script>";
		echo "<script> document.location.href = 'cadastro_carro.php'; </script>";
	}
?>