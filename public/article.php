<?php
require __DIR__ . '/../protected/Db.php';
require __DIR__ . '/../protected/Models/Article.php';

if(empty($_GET['id'])) {
   echo 'Ошибка';
}

$id = $_GET['id'];
$article = Article::findById($id);

include __DIR__ . '/../templates/article.php';