<?php
require '../config/keys.php';
require '../core/db_connect.php';
require '../core/session.php';
checkSession();

$meta=[];
$meta['description'] = "ahenrikson0582";
$meta['title']="ahenrikson0582";

$content="<h1>ahenrikson0582 Users</h1>";
$stmt = $pdo->query('SELECT * FROM users');

while($row = $stmt->fetch()){
  $content .= "<div><a href=\"../public/users/view.php?id={$row['id']}\">{$row['first_name']} {$row['last_name']}</a></div>";
}

$content .= "<br><hr><div><a href=\"../public/users/add.php\">New User</a></div><br>";

require '../core/layout.php';