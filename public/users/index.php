<?php
// require '../../core/bootstrap.php';
require '../../config/keys.php';
require '../../core/db_connect.php';
require '../../core/session.php';
checkSession();

//Build the page metadata
$meta = [];
$meta['description'] = "Users ahenrikson0582 User List";
$meta['keywords'] = "users, ahenrikson0582, user list";

$content="<h1>ahenrikson0582 Users</h1>";
$stmt = $pdo->query('SELECT * FROM users');

while($row = $stmt->fetch()){
  $content .= "<div><a href=\"view.php?id={$row['id']}\">{$row['first_name']} {$row['last_name']}</a></div>";
}

$content .= "<br><hr><div><a href=\"add.php\">New User</a></div><br>";

require '../../core/layout.php';