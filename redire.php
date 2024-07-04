<?php
include "verif-log.php";
if (!isset($_SESSION['nivel']) or $_SESSION['nivel'] == 2) {
    header('location: principal.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/inicial-professor.css">
    <title>Menu</title>
    <link rel="shortcut icon" href="barra.ico" type="image/x-icon">
</head>

<body>
    <div class="container">
    <h1>Olá, <?php echo $_SESSION['user']; ?> </h1><br>
    <h3>Página do administrador</h3>
    <p>Olá administrador(a), <?php echo $_SESSION['user']; ?></p>
    <p><p>
        <hr>
    </p></p>
    <div class="d">
        <a href="crud/crud_aluno/"><button type="button" class="btn btn-primary">Crud aluno</button><br><br></a>
        <a href="crud/crud_disciplina/"><button type="button" class="btn btn-primary">Crud disciplinas</button><br><br></a>
        <a href="crud/crud_horario/"><button type="button" class="btn btn-primary">Crud horário</button><br><br></a>
        <a href="crud/crud_presenca/"><button type="button" class="btn btn-primary">Crud presença</button><br><br></a>
        <a href="crud/crud_sala/"><button type="button" class="btn btn-primary">Crud sala</button><br><br></a>
        <a href="crud/crud_turma/"><button type="button" class="btn btn-primary">Crud turma</button><br><br></a>
        <a href="crud/crud_usuario/"><button type="button" class="btn btn-primary">Crud usuário</button><br><br><br></a>
        
        <?php echo '<td> <a href="logout.php"><button type="button" class="btn btn-outline-secondary">Logout  <img src="img/logout.png" width="20" height="20"></button></a></td>';?>
        
    </div>
</body>

</html>
