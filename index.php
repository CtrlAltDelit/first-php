<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PHP</title>
</head>
<body>
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
                        <button type="button" class="btn btn-sm btn-outline-secondary">Удалить</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Редакторовать</button>
                    </div>
                </div>
            </div>
        </div>
      <?php endfor; ?>
</body>
</html>