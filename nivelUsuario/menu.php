<?php
session_start();
$nivel = $_SESSION['nivelUsuario'];
?>

<ul>
<li><a href="#">Inicial</a></li>
<?php if($nivel == 'administrativo' || $nivel == 'gestor'){ ?>
    <li><a href="cadastroProcesso.php">Cadastro Processo</a></li>
<?php } ?>

<?php if($nivel == 'medico'){ ?>
    <li><a href="listaProcesso.php">Lista Processo</a></li>
    <li><a href="#">Evolucao Clinica</a></li>
<?php } ?>

<?php if($nivel == 'controle'){ ?>
    <li><a href="#">Outra coisa muito importante</a></li>
<?php } ?>


</ul>