<?php
$option_marca = '';

$query_marcas = "SELECT * FROM marcas ";

$result_marcas = mysqli_query($conn, $query_marcas);
while ($row_marca = mysqli_fetch_array($result_marcas)) {
    $option_marca .= '<option>';
    $option_marca .= $row_marca['marca'];
    $option_marca .= '</option>';
}
