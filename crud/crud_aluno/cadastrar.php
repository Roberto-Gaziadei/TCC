<?php
session_start();
if (!isset($_SESSION['nivel']) or $_SESSION['nivel'] == 2) {
    header('location: ../../principal.php');
    die();
}

//conectar ao banco de dados.
include("conecta.php");

//receber os dados do formulário.
//$id_aluno = $_POST['id_aluno'];
$matricula = $_POST['matricula'];
$nome = $_POST['nome'];


//comando sql.
$sql = "INSERT INTO aluno (matricula, nome) VALUES ($matricula, '$nome')";

header("location: listar.php");

//executar o comando sql.
mysqli_query($conexao, $sql);
