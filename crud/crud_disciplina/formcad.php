<?php
session_start();
if (!isset($_SESSION['nivel']) or $_SESSION['nivel'] == 2) {
    header('location: ../../index.php');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>

    
    <form action="cadastrar.php" method="post">
    <input type="hidden" name="id_disciplinas">
        <input type="text" name="nome_disciplina" placeholder="Nome da disciplina" required><br><br>
        <input type="text" name="professor" placeholder="Professor responsável" required><br><br>

        <input type="submit" value="Cadastrar"><br><br><br><br>
        <button><a href="index.php">Voltar</a></button>
    </form>
</body>
</html>