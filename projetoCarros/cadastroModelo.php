<?php
require_once('config.php');
if($_POST){

    // if else comum
   /* if($_POST['outraMarca'] != ''){
        $marca = $_POST['outraMarca'];
    }else{
        $marca = $_POST['marca'];
    } */

    //usando operador ternario
    $marca = ($_POST['outraMarca'] != '') ? $_POST['outraMarca'] : $_POST['marca'];
    $modelo = $_POST['modelo'];  
     // echo $marca; // apenas pra testar se está passando o valor

    $query_modelo_existente = "SELECT * FROM modelos WHERE modelo = '".$modelo."' AND marca = '".$marca."' ";
    $result_modelo_existente = mysqli_query($conn, $query_modelo_existente) or die(mysqli_error($conn));

    if($row_modelo_existente = mysqli_fetch_array($result_modelo_existente)){ // verifica se o veiculo existe no banco

        $mensagem = 'Veiculo Já existe!';

    }else{ // quando o veiculo não existe no banco

        $query_cadastro_modelo = "INSERT INTO modelos (marca, modelo) VALUES ('".$marca."', '".$modelo."')";
        $result_cadastro_modelo = mysqli_query($conn, $query_cadastro_modelo) or die(mysqli_error($conn));
    
        $mensagem = 'O veículo '.$modelo.' da marca '.$marca.' foi cadastrado com sucesso!';

    }

   
    
   
}
?>
<html>

<head>
</head>

<body>
    <?php

    if($mensagem){
        echo '<h1>'.$mensagem.'</h1>';
    }

    ?>
    <form action="cadastroModelo.php" method="POST">

        <select id="marca" name="marca">
            <option>Selecione</option>
        </select>
        <br>
        <div id="outraMarca">
            <label>Informe a Marca:</label>
            <input id="outraMarcaInput" name="outraMarca" type="text">
        </div>
        <br>
        <br>
        <br>

        <label>Informe o Modelo:</label><br>
        <input name="modelo" type="text">
        <br>
        <br>
        <br>
        <input type="submit" value="Cadastrar Modelo">

    </form>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Esse script popula o select id marca com o valor de include/getMarcas.php -->
    <script src="JS/getOptionMarca.js"></script>

    <!-- Esse script vai mostrar o campo outro, caso valor de marca seja outro -->
    <script src="JS/mostraInput.js"></script>

</body>

</html>