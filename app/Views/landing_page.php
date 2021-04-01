<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/landing.css'); ?>">
    <title>Projeto PBL</title>
</head>

<body>
    <div class='background'>
        <img src="<?php echo base_url('assets/images/img-landing-page.png');?>" alt="educação a distância">
        <div class='texto'>
            <h1>Projeto PBL</h1>
            <p class='lead'>Este site é resultado de uma pesquisa sobre as dificuldades dos alunos nas aulas remotas no Brasil.</p>
            <figure class="cite">
                    <blockquote class="blockquote">
                        <p>“Educação não transforma o mundo. Educação muda as pessoas. Pessoas transformam o mundo.”</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        Filósofo e Educador <cite title="Source Title">Paulo Freire</cite>
                    </figcaption>
                </figure>
                <div class='botao-entrar'>
                    <a class="btn btn-success" href="home" role="button">Entrar no site!</a>
                <h5><small><?= $acessos ?> pessoas já acessaram esse site!</small></h5>
                </div>
            </div>
        </div>
    </div>
</body>
</html>