<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
</head>
<body>
<?php foreach ($this->news as $article) :  ?>
    <section>
        <h1><?php echo $article->title ?></h1>
        <p style="color: red">Подзаголовок: <?php echo $article->lead ?></p>
        <article>Описание: <?php echo $article->describtion ?></article>


        <p style="color: green"><?php
        if (!empty($article->author_id)){
        echo 'Автор: ' . $article->author->author;

        } ?></p>
    </section>
    <hr>
<?php endforeach; ?>

<?php
$view = new \App\View();
$view->display(__DIR__ . '/footer.php');
?>


</body>
</html>