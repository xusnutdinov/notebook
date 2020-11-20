<?php

require 'database/QueryItem.php';

$table = 'notes';
$db = new QueryItem();
$notes = $db->getAllItems($table);

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Notebook</title>
</head>
<body>
    <div class="col-xl-10 container pb-5">

        <h1 class="text-center mt-3 mb-3 display-1">Блокнот</h1>

        <div class="jumbotron mt-3">

            <h1 class="page-header">Список всех записей</h1>
            <p class="lead">В этом разделе можно посмотреть список всех записей в блокноте</p>

        </div>
        <div class="container-fluid">
            <a href="./add.php" class="btn btn-warning mb-3">Создать запись</a>
            <table class="table mt-30 table-hover ">

                <thead class="thead-light">
                    <tr class="">
                        <th >ID</th>
                        <th>Заголовок</th>
                        <th>Действия</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($notes as $note): ?>
                        <tr>
                            <td><?= $note['id'] ?></td>
                            <td><?= $note['title'] ?></td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="./show.php?id=<?= $note['id'] ?>">Посмотреть</a>
                                    <a class="btn btn-secondary" href="./change.php?id=<?= $note['id'] ?>">Изменить</a>
                                    <a class="btn btn-danger" href="delete.php?id=<?= $note['id'] ?>">Удалить</a
                            </div>
                            </td>
                        </tr>
                    <?php endforeach;?>

                </tbody>
            </table>
        </div>
    </div>
</body>
</html>