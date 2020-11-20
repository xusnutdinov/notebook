<?php
require_once "database/QueryItem.php";

$db = new QueryItem();
$data = [
    "id" => $_GET['id'],
    "title" => $_POST['title'],
    "content" => $_POST['content']
];
$table = "notes";

$db->updateItem($data, $table);

header("Location: /show.php?id={$data['id']}");


