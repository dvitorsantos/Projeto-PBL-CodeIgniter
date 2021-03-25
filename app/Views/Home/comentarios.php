<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/comentarios.css'); ?>">
    <title>Document</title>
</head>

<body >
    <div class="container">
            <h1 class="display-4">Comentários</h1>
            <p class="lead">
                Aqui estão alguns comentários feitos pelos visitantes do site.
            </p>
        <?php
        for ($i = 0; $i < count($comentarios); $i = $i + 4) {
            echo "<div class='card'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>" . $comentarios[$i] . "</h5>";
            echo "<p class='card-text'>" . $comentarios[$i + 1] . "</p>";
            echo "<div class='hour-and-date-info'>";
            echo "<img src='" . base_url('assets/icons/clock.svg') . "'></img>";
            echo "<p class='card-text'>" . $comentarios[$i + 2] . "</p>";
            echo "</div>";
            echo "<div class='hour-and-date-info'>";
            echo "<img src='" . base_url('assets/icons/calendar.svg') . "'></img>";
            echo "<p class='card-text'>" . $comentarios[$i + 3] . "</p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        ?>
            <a class="btn btn-success" href="adicionar_comentario" role="button">Adicionar Comentário</a>
    </div>
</body>

</html>