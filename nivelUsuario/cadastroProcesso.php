<?php
session_start();

$nivel = $_SESSION['nivelUsuario'];
?>


<?php
    if($nivel == 'administrativo'){
?>

<h1>Voce tem acesso, bem vindo!</h1>
<p>blablbalbl albla lalsdlasdl fglasd</p>
<p>blablbalbl albla lalsdlasdl fglasd</p>
<p>blablbalbl albla lalsdlasdl fglasd</p>
<p>blablbalbl albla lalsdlasdl fglasd</p>
<p>blablbalbl albla lalsdlasdl fglasd</p>
<p>blablbalbl albla lalsdlasdl fglasd</p>
<p>blablbalbl albla lalsdlasdl fglasd</p>
<p>blablbalbl albla lalsdlasdl fglasd</p>
<p>blablbalbl albla lalsdlasdl fglasd</p>

<?php }else{ ?>

<h2>Acesso Restrito.</h2>


<?php } ?>