<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Projeto PBL</title>
</head>

<body>
    <div class='background'>
        <img src="<?php echo base_url('assets/images/img-landing-page.png');?>" alt="educação a distância">
        <div class='texto'>
            <h1>Projeto PBL</h1>
            <p class='lead'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fermentum,
                nibh quis ornare pharetra, mauris augue condimentum nibh, vitae congue erat ante in lacus.
                Aenean malesuada libero id erat ultricies pulvinar. Nulla quis facilisis leo.
                Nulla facilisis nunc mi, quis interdum turpis euismod id. Morbi suscipit lorem massa,
                ut porttitor odio gravida ut. Maecenas tincidunt, ex nec iaculis condimentum,
                massa augue accumsan risus, et porttitor enim sem sit amet tellus. Phasellus sollicitudin,
                enim quis volutpat congue, risus quam mollis felis, ac sagittis est nisl id quam.</p>
                <div class='botao-entrar'>
                    <a class="btn btn-success" href="home" role="button">Entrar no site!</a>
                <h5><small><?= $acessos ?> pessoas já acessaram esse site!</small></h5>
                </div>
            </div>
        </div>
    </div>
</body>
<style>
    .background {
    height: 100vh;
    width: 100vw;
    display: flex;
    justify-content: center;
    align-items: center;
}

.texto {
    text-align: justify;
    margin: 0 4rem 0 0;
}

.botao-entrar {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

@media only screen and (max-width: 600px) {
    .background {
        height: 100%;
        width: 100%;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .background img {
        display: none;
    }

    .texto {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin: 2rem 2rem 0 2rem;
    }

    .botao-entrar {
        flex-direction: column-reverse;
        margin: 2rem 0 2rem 0;
    }
}
</style>
</html>