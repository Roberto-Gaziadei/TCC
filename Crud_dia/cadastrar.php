<?php

//conectar ao banco de dados.
include("conecta.php");

//receber os dados do formulário.
$id_dia = $_POST['dia'];
$dia = $_POST['dia'];


//comando sql.
$sql = "INSERT INTO dia (dia , id_dia) VALUES ('$dia', $id_dia)";

header("location: listar.php");
 
//executar o comando sql.
mysqli_query($conexao, $sql);

?>