<?php
$Mnumero = $_POST['numero'];
	$Manexo = $_POST['Manexo'];
	$Morgao = ($_POST['man2'] != '') ? $_POST['man2'] : $_POST['man1'];
	$Msancao = ($_POST['Mmulta'] != '') ? $_POST['Mmulta'] : $_POST['Msancao'];

	$query_tipo = "SELECT * FROM Mandado WHERE orgao_expeditor = '".$Mandado."' AND orgao_expeditor = '".$Morgao."' ";
	$query_tipo = "SELECT * FROM Mandado WHERE sancao = '".$Mandado."' AND sancao = '".$Msancao."' ";
	$result_tipo = mysqli_query($conexao, $query_tipo) or die(mysqli_error($conexao));
	if($row_tipo_existente = mysqli_fetch_array($result_tipo)){
		$mensagem;
	}else{
		$query_cadastro= "INSERT INTO Mandado (numero, anexo, orgao_expeditor, sancao) VALUES ('".$Mnumero."', '".$Manexo."','".$Morgao."','".$Msancao."')";
		$result_cadastro= mysqli_query($conexao, $query_cadastro) or die(mysqli_error($conexao));