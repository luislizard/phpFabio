<?php
require_once('config.php');
if ($_POST) {
    $marca = $_POST['marca'];
    
    $query_marcas = "INSERT INTO `marcas`(`marca`) VALUES ('".$marca."')";
    $result_marcas = mysqli_query($conn, $query_marcas);
}

?>

<form action="cadastroMarca.php" method="POST">
    <input type="text" name="marca">
    <input type="submit">
</form>