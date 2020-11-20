<?php
require_once "database/QueryItem.php";
$db = new QueryItem();
$data = $_POST;
$table = "notes";
$db->addItem($data, $table);

header('Location: /');

