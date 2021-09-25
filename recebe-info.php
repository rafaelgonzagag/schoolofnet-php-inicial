<?php
//HTTP - GET e POST
var_dump($_GET);
?>

<h1><?php echo $_GET['nome'] ?></h1>

<form action="" method="post">
    <input type="text" name = "nome">
    <button type="submit"> Enviar</button>
</form>