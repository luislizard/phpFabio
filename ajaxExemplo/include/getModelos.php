<?php
require_once('../../config.php');

$marca = $_GET['marca'];

$option_modelos = '';

$query_modelos = "SELECT * FROM modelos WHERE marca = '".$marca."' ";

$result_modelos = mysqli_query($conn, $query_modelos);
while ($row_modelos = mysqli_fetch_array($result_modelos)) {
    $option_modelos .= '<option>';
    $option_modelos .= $row_modelos['modelo'];
    $option_modelos .= '</option>';
}

echo $option_modelos;
echo '<option>outros</option>';