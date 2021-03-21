<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
    for ($i = 0; $i < count($comentarios); $i = $i + 2) {
        echo "<div class='card'>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>".$comentarios[$i]."</h5>";
        echo "<p class='card-text'>".$comentarios[$i + 1]."</p>";
        echo "</div>";
        echo "</div>";
    }
?>
<a class="btn btn-success" href="adicionar_comentario" role="button">Adicionar Comentário</a>
</body>
</html>