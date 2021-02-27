<?php
/* */
/* getPostRequest.php?marca=ford&modelo=ka&cor=preto */

    $marca = $_GET['marca'];
    $modelo = $_GET['modelo'];
    if($_GET['cor']!=''){
        $cor = $_GET['cor'];
    }else{
        $cor = 'padrão';
    }
    
    echo '<h1>'.$marca.'</h1>';
    echo '<h1>'.$modelo.'</h1>';
    echo '<h1>'.$cor.'</h1>';
?>