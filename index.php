<?php // phpinfo(); ?>
<?php
require_once('config.php');

$query_marcas = "SELECT * FROM marcas ";

$result_marcas = mysqli_query($conn, $query_marcas);
while ($row_marca = mysqli_fetch_array($result_marcas)) {
    echo $row_marca['marca'];
    echo '<br>';
}
?>