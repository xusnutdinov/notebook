<?php
require_once "database/QueryItem.php";

$id = $_GET['id'];
$table = "notes";
$db = new QueryItem();

$db->deleteItem($id, $table);

