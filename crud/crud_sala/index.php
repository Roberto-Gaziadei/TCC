<?php
session_start();
if (!isset($_SESSION['nivel']) or $_SESSION['nivel'] == 2) {
    include "../../login/verif-log.php";
    die();
}
include('../../conecta.php');
?>
<!DOCTYPE html>
<htm lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h1> Crud das salas</h1><br>
    <button><a href="formcad.php">Cadastrar </button></a><br><br>
    <button><a href="listar.php">Listar</button><br><br><br><br>
    <button><a href="/roberto/TCC/login/redire.php">Voltar</a></button>
</div>
</body>
</html>