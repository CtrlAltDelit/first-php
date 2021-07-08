<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="image/x-icon" rel="shortcut icon" href="img/php-icon.png">
    <link type="image/png" sizes="16x16" rel="icon" href="img/php-icon.png">
    <link type="image/png" sizes="32x32" rel="icon" href="img/php-icon.png">
    <link type="image/png" sizes="96x96" rel="icon" href="img/php-icon.png">
    <link type="image/png" sizes="120x120" rel="icon" href="img/php-icon.png">
    <link rel="stylesheet" href="js/remove-block.js" >
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Банковские активы</title>
</head>
<body>

    <div class="header container">
        <div class="d-flex flex-column flex-md-row align-items-center mt-3 mb-4 pb-3 border-bottom">
        <a href="/" class="d-flex align-items-center text-dark ms-1 text-decoration-none">
            <span class="fs-4 m">Банковские активы</span>
        </a>

        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <a class="me-5 py-2 text-dark text-decoration-none" href="#">Добавить</a>
            <a class="me-1 py-2 text-dark text-decoration-none" href="#">Выйти</a>
        </nav>
        </div>
    </div>

    <?php
        for($i = 0; $i < 5; $i++):
    ?>

    <div class="card shadow-sm container">
        <img class="img-bank" src="img/<?php echo ($i + 1) ?>.jpg" alt="photo-bank">
        <div class="card-body">
            <p class="card-text">Российский финансовый конгломерат, крупнейший транснациональный и универсальный банк России, Центральной и Восточной Европы.</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Добавить</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary" onclick="removeWishList()";>Удалить</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Редакторовать</button>
                </div>
            </div>
        </div>
    </div>
    <?php endfor; ?>
</body>
</html>