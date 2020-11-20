<?php
require_once "database/QueryItem.php";

$db = new QueryItem();

$table = 'notes';
$id = $_GET['id'];

$note = $db->getOneItemById($id, $table);
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Notebook</title>
</head>
<body>
<div class="col-xl-10 container">

    <h1 class="text-center mt-3 mb-3 display-1">Блокнот</h1>

    <div class="jumbotron mt-3">
        <h1 class="page-header">Просмотр записи</h1>
        <p class="lead">В этом разделе можно посмотреть определенную запись в блокноте</p>
        <hr class="my-4">
        <a href="./index.php">Вернуться на главную</a>
    </div>

    <div class="container-fluid pb-5">
        <div class="card mb-5">
            <div class="card-header text-muted text-center">
                Запись
            </div>
            <div class="card-body">
                <h3 class="card-title"><?= $note['title'] ?></h3>
                <p><?= $note['content'] ?></p>
            </div>
            <div class="card-footer text-muted text-center">
                <?= $note['create_date'] ?>
            </div>
        </div>

        <a href="change.php?id=<?= $note['id'] ?>" class="btn btn-secondary">Изменить</a>
        <a href="delete.php?id=<?= $note['id'] ?>" class="btn btn-danger">Удалить</a>
    </div>

</div>
</body>
</html>