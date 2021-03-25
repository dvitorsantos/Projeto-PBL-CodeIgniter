<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/header.css'); ?>">
  <title>Projeto PBL</title>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: #21294c;">
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="inicio">Projeto PBL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <img src="<?php echo base_url('assets/icons/house.svg'); ?>" alt="">
              <a class="nav-link" href="inicio">Início</a>
            </li>
            <li class="nav-item">
              <img src="<?php echo base_url('assets/icons/document.svg'); ?>" alt="">
              <a class="nav-link" href="pesquisa_popular">Pesquisa Popular</a>
            </li>
            <li class="nav-item">
              <img src="<?php echo base_url('assets/icons/thinking.svg'); ?>" alt="">
              <a class="nav-link" href="reflexao">Reflexão</a>
            </li>
            <li class="nav-item">
              <img src="<?php echo base_url('assets/icons/comments.svg'); ?>" alt="">
              <a class="nav-link" href="comentarios">Comentários</a>
            </li>
            <li class="nav-item">
              <img src="<?php echo base_url('assets/icons/star.svg'); ?>" alt="">
              <a class="nav-link" href="creditos">Créditos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</body>

</html>