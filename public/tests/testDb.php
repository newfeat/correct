<?php

require __DIR__ . '/../../protected/Db.php';
require __DIR__ . '/../../protected/Models/Article.php';

$db = new Db();
var_dump($db);

$sql = 'INSERT INTO test (id, title) VALUES (:id,:title)';
$res = $db->execute($sql, [':id' => null, ':title' => 'one']);
var_dump($res);


$sql = 'UPDATE test SET title=:title WHERE id=:id';
$res = $db->execute($sql, [':id' => 1, ':title' => 'two']);
var_dump($res);


$sql = 'SELECT * FROM test';
$res = $db->query($sql, Article::class);
var_dump(is_array($res));


$data = Article::findAll();
var_dump($data);


$data = Article::findById(2);
var_dump($data);


$data = Article::findById(10);
var_dump($data);


$data = Article::findLatest(1);
var_dump($data);


$data = Article::findLatest(10);
var_dump($data);