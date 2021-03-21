<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="adicionar_comentario" method="POST">
  <div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input name="nome" class="form-control" type="text" placeholder="Seu nome" aria-label="nome">
  </div>
  <div class="mb-3">
    <label for="comentario" class="form-label">Comentario</label>
    <textarea name="comentario" class="form-control" id="comentario" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</body>
</html>