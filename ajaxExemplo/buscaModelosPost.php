<?php

require_once("../config.php");

if($_POST){

    $marca = $_POST['marca'];


    $query_modelos = "SELECT * FROM modelos WHERE marca = '".$marca."' ";
    
    $result_modelos = mysqli_query($conn, $query_modelos);
    while ($row_modelo = mysqli_fetch_array($result_modelos)) {
        echo $row_modelo['modelo'];
        echo '<br>';
    }    

}


?>

<form action="buscaModelosPost.php" method="POST">
    <input type="text" name="marca">
    <input type="submit" value="buscar">
</form>