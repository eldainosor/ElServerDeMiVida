<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El rock de tu vida | Inicio</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
            <!-- Vertically centered modal -->
            <div class="modal fade" id="registroModal" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">No hay registro :(</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <img class="img-fluid rounded" src="../img/sepuede_parca.jpg" alt="No se puede">
                        <audio controls autoplay id="ripmusica">
                        <source src="../assets/qepd.ogg" type="audio/ogg">
                        Tu navegador no soporta la reproduccion de audio.
                        </audio>
                        <br>
                        <p>En estos momentos, no hay soporte para un registro de usuarios. Si podés ver esta página despues de realizar la instalación del juego, entonces, ¡Felicitaciones! Está todo preparado para que puedas arrancar a jugar.</p>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
                </div>
            </div>

    <?php
        if (array_key_exists('action', $_GET)) {
             if ($_GET['action'] === "registro") {
                echo "<script>". PHP_EOL;
                echo "$(document).ready(function(){" . PHP_EOL;
                echo "$(\"#registroModal\").modal('show')" . PHP_EOL;
                echo "});";
                //echo "$(\"#registroModal\").on('shown.bs.modal', function (e) {". PHP_EOL;
                //echo "var ripmusica = document.getElementById(\"ripmusica\");". PHP_EOL;
                //echo "setTimeout(function() {". PHP_EOL;
                //echo "    ripmusica.play();". PHP_EOL;
                //echo "},500);". PHP_EOL;
                //echo "})";
                //echo "const myModalAlternative = new bootstrap.Modal('#myModal', {focus: true})". PHP_EOL;

                echo "</script>". PHP_EOL;
             }
        }
    ?>
</body>
</html>