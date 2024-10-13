<?php
if (isset($_GET['sala']) and $_GET['sala'] !== null) {
    $sala = $_GET['sala'];
}
include "../conecta.php";
session_start();
if (!isset($_SESSION['nivel']) or $_SESSION['nivel'] == 1) {
    die("<script>
    alert('Página dedicada aos professores');
    window.location.href = window.location.origin + '/roberto/TCC/login/logout.php';
    </script>");
}
?>
<!DOCTYPE HTML>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../css/jquery.min.js"></script>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../css/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/layout.css">

    <title>Escaner - QR Code</title>
</head>

<body>
    <div class="container">
        <header>
            <h2 style="font-size: 35px;"> <a href="index.php" style="text-decoration: none"> Página do professor </a></h2>
            <nav>
                <ul>
                    <!-- <li><a href="../nova-senha.php"><button type="button" class="btn btn-outline-info">Alterar senha   </button></a></td></a></li> -->
                    <li><a href="../login/logout.php"><button type="button" class="btn btn-outline-danger">Sair <img src="../img/logout.png" width="20" height="20"></button></a></td></a></li>
                    <!-- <li><a href="#">Sobre</a></li>
                    <li><a href="#">Contato</a></li> -->
                </ul>
            </nav>
        </header>
        <main>
            <section>
                <p style="font-size: 25;">Olá, <?php echo $_SESSION['user']; ?></p>

                <form action="processa.php" method="get">
                    <div style="text-align: center; font-size: 25px;">
                        <select name="sala" required>


                            <option selected value="">Selecione a sala</option>
                            <?php
                            $sql = "SELECT * FROM sala";
                            $executaSQL = mysqli_query($conexao, $sql);
                            while ($dados = mysqli_fetch_assoc($executaSQL)) { ?>
                                <option
                                    <?php
                                    if (isset($_GET['sala']) and $_GET['sala'] !== null) {
                                        //if ($sala == $dados['n_sala']) {
                                           // echo "selected"; ?>
                                    value="<?php echo $dados['n_sala']; ?>"><?php echo $dados['descricao']; ?>
                                </option>
                    <?php
                                        }
                                    }
                                //}
                    ?>

                        </select>



                    </div><br>


                    <a class="btn btn-secondary link1" role="button" href="#" onclick="mostraInput()" style="text-decoration: none"> Entrada Manual </a>
                    <a class="btn btn-secondary link2" href="#" role="button" onclick="mostraQrcode()" style="text-decoration: none"> Entrada Automática</a>
                    <br><br>

                    <div style="text-align: center; font-size: 20px">
                        <input id="matricula" type="number" name="matricula" placeholder="Matricula" required>
                        <input id="enviar" type="submit" value="Enviar">

                    </div>
                </form>

            </section>

        </main>
        <script>
            jQuery('#qr-reader').show();
            jQuery('#matricula').hide();
            jQuery('#enviar').hide();

            function mostraInput() {
                jQuery('#qr-reader').hide();
                jQuery('#matricula').show();
                jQuery('#enviar').show();
            }

            function mostraQrcode() {
                jQuery('#qr-reader').show();
                jQuery('#matricula').hide();
                jQuery('#enviar').hide();
            }
        </script>


        <div id="qr-reader">
</body>
<script src="html5-qrcode.min.js"></script>
<script>
    function docReady(fn) {
        if (document.readyState === "complete" ||
            document.readyState === "interactive") {
            setTimeout(fn, 1);
        } else {
            document.addEventListener("DOMContentLoaded", fn);
        }
    }
    docReady(function() {
        var resultContainer = document.getElementById('qr-reader-results');
        var lastResult, countResults = 0;

        function onScanSuccess(decodedText, decodedResult) {
            if (decodedText !== lastResult) {
                let inputSala = document.getElementsByName("sala")[0];
                let sala = inputSala.value;
                ++countResults;
                lastResult = decodedText;
                location.href = `processa.php?sala=${sala}&matricula=${decodedText}`, decodedResult;
                console.log(`Scan result ${decodedText}`, decodedResult);
            }
        }
        var html5QrcodeScanner = new Html5QrcodeScanner(
            "qr-reader", {
                fps: 10,
                qrbox: 250
            });
        html5QrcodeScanner.render(onScanSuccess);
    });
</script>
</div>

</html>