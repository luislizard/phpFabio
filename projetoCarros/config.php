<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "carros";

global $conn;
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
