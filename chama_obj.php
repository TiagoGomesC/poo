<?php
require_once 'Clientes.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$c1 = new Clientes($_POST['nome'], $_POST['idade'], $_POST['peso']);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    Cadastro de Cliente
    <form method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id=""><br>
        <label for="idade">Idade: </label>
        <input type="number" name="idade" id=""><br>
        <label for="peso">Peso: </label>
        <input type="number" name="peso" id="" steps=0.5><br>
        <input type="submit" value="Cadastrar">
    </form>
    <?php
    if(isset($c1)){
    $c1->mostrarDados();
    }
    ?>
</body>
</html>