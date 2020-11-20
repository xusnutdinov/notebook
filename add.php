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
<div class="col-xl-10 container">

    <h1 class="text-center mt-3 mb-3 display-1">Блокнот</h1>

    <div class="jumbotron mt-3">
        <h1 class="page-header">Создание записи</h1>
        <p class="lead">В этом разделе можно создать запись в блокноте</p>
        <hr class="my-4">
        <a href="./index.php">Вернуться на главную</a>
    </div>
    <div class="container-fluid">
        <form action="store.php" method="post" class="pb-5">
            <div class="form-group">
                <label for="title">Заголовок</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="content">Содержание</label>
                <textarea rows="7" name="content" id="content" class="form-control"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Добавить запись</button>
        </form>
    </div>
</div>
</body>
</html>