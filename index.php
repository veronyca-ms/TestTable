<?php

if ( 
    !empty($_GET["nome"]) && isset($_GET["nome"]) &&
    !empty($_GET["idade"]) && isset($_GET["idade"]) &&
    !empty($_GET["email"]) && isset($_GET["email"])
) {

    $nome = $_GET["nome"];
    $idade = $_GET["idade"];
    $email = $_GET["email"];
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form>
        <h1>Formulario</h1>
        <input type="text" name="nome" placeholder="Digite seu nome..." required> <br>
        <input type="number" name="idade" min=0 max=100 placeholder="Digite sua idade..." required> <br>
        <input type="mail" name="email" placeholder="Digite seu email..."><br>
        <button submit="action">ENVIAR</button>
    </form>

    <table>
        <thead>
            <th>NOME</th>
            <th>IDADE</th>
            <th>EMAIL</th>
        </thead>
        <tbody>
            <td><?=$nome?></td>
            <td><?=$idade?></td>
            <td><?=$email?> </td>
        </tbody>
    </table>
</body>
</html>