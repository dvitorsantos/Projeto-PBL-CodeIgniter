<!DOCTYPE html>
<html lang="en">

<head> 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/header.css'); ?>">
  <title>Projeto PBL</title>
</head>

<body> 
  <div class="sticky-top background">
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
    <a class="navbar-brand text-white" href="inicio">Projeto PBL</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <img src="<?php echo base_url('assets/icons/house.svg'); ?>" alt="">
            <a class="nav-link link-light" href="inicio">Início</a>
          </li>
          <li class="nav-item">
          <img src="<?php echo base_url('assets/icons/document.svg'); ?>" alt="">
            <a class="nav-link link-light" href="pesquisa_popular">Pesquisa Popular</a>
          </li>
          <li class="nav-item">
          <img src="<?php echo base_url('assets/icons/thinking.svg'); ?>" alt="">
            <a class="nav-link link-light" href="reflexao">Reflexão</a>
          </li>
          <li class="nav-item">
          <img src="<?php echo base_url('assets/icons/comments.svg'); ?>" alt="">
            <a class="nav-link link-light" href="comentarios">Comentários</a>
          </li>
          <li class="nav-item">
          <img src="<?php echo base_url('assets/icons/star.svg'); ?>" alt="">
            <a class="nav-link link-light" href="creditos">Créditos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
</body>

</html>