<?php
require_once('config.php');
require_once('getMarcas.php');
?>
<html>

<head>
</head>

<body>
    <select id="campo1">
        <option>Selecione</option>
        <?php echo $option_marca; ?>
        <option>outros</option>
    </select>

    <input id="campo2" type="text">


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="mostraInput.js"></script>
</body>

</html>