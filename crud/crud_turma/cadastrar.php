<?php
session_start();
if (!isset($_SESSION['nivel']) or $_SESSION['nivel'] == 2) {
    include "../../login/verif-log.php";
    die();
}
include('../../conecta.php');
$id_turma = $_POST['id_turma'];
$nome = $_POST['nome_turma'];
$sql = "INSERT INTO turma (id_turma, nome_turma) VALUES ($id_turma, '$nome')";
mysqli_query($conexao, $sql);
die("<script>
alert('Turma cadastrada com sucesso!');
window.location.href = window.location.origin + '/roberto/TCC/crud/crud_turma/formcad.php';
</script>");
?>