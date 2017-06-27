<?php
require __DIR__ . '/../protected/autoload.php';
$data = \App\Models\Article::findAll();
$view = new \App\View();

$view->news = $data;
$view->display(__DIR__ . '/../templates/index.php');
