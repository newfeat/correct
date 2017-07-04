<?php
require __DIR__ . '/../protected/Db.php';
require __DIR__ . '/../protected/Models/Article.php';


$news = Article::findLatest(3);
include __DIR__ . '/../templates/news.php';