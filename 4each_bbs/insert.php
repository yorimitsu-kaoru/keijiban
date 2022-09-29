<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=manabiya_sakura;host=localhost;", "root", "");

$pdo->exec("insert into 4each_bbs(handlename,title,comments)
value('" . $_POST['handlename'] . "','" . $_POST['title'] . "','" . $_POST['comments'] . "');
    ");

header("Location:http://localhost/htdocs_Manabiya%20Sakura/4each_bbs/index.php");
