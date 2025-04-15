<?php
    require_once './components/button.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/style.css">

    <title>Document</title>
</head>
<body>
    <h1>Teste componente dinâmico com PHP</h1>
    <br>

    <h2>Componentes de Botão</h2>
    <?= renderButton('primary', 'Salvar') ?>
    <br><br>
    <?= renderButton('secondary', 'Cancelar') ?>
    <br><br>
    <?= renderButton('action', 'Entrar') ?>
</body>
</html>