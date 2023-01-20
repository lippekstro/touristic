<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Touristic</title>
    <link rel="stylesheet" href="<?= dirname('/touristic/css/style.css') . DIRECTORY_SEPARATOR . 'style.css';?>">
    <link rel="stylesheet" href="<?= dirname('/touristic/css/style.css') . DIRECTORY_SEPARATOR . 'carrossel.css';?>">
    <link rel="stylesheet" href="<?= dirname('/touristic/css/style.css') . DIRECTORY_SEPARATOR . 'image_grid.css';?>">
</head>

<body>
    <header>
        <div class="container-head">
            <div class="container-logo">
                <img src="img/barco.jpg" alt="" style="width: 100%;">
            </div>
        </div>

        <div class="container-menu">
            <ul>
                <li>
                    <a href="<?= dirname('/touristic/index.php') ?>">INICIO</a>
                </li>
                <li>
                    <a href="<?= dirname('/touristic/views/blog.php') . DIRECTORY_SEPARATOR . 'blog.php' ?>">BLOG</a>
                </li>
                <li>
                    <a href="<?= dirname('/touristic/views/locais.php') . DIRECTORY_SEPARATOR . 'locais.php' ?>">LOCAIS</a>
                </li>
                <li>
                    <a href="<?= dirname('/touristic/views/experiencias.php') . DIRECTORY_SEPARATOR . 'experiencias.php' ?>">EXPERIENCIAS</a>
                </li>
                <li>
                    <a href="<?= dirname('/touristic/views/eventos.php') . DIRECTORY_SEPARATOR . 'eventos.php' ?>">EVENTOS</a>
                </li>
                <li>
                    <a href="<?= dirname('/touristic/views/sobre.php') . DIRECTORY_SEPARATOR . 'sobre.php' ?>">SOBRE</a>
                </li>
            </ul>
        </div>


    </header>

    <main>