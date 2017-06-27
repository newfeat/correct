<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Maffins &ndash; продукт</title>
    <link rel="stylesheet" type="text/css" href="/../css/style.css">
</head>
<body>
<header class="container">
    <?php include __DIR__ . '/header.php'; ?>
</header>
<article class="container">
    <div class="block1">
        <div class="container1">
            <?php
            require __DIR__ . '/../protected/Db.php';
            require __DIR__ . '/../protected/Models/Article.php';
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $data = Article::findById($id); ?>


                <table>
                    <tr>
                        <td>
                            <h1><?php echo $data->title; ?></h1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="<?php echo $data->image; ?>" width="200px" height="200px" alt="<?php echo $data->title; ?>">
                        </td>
                        <td>
                            <p><?php echo $data->desc; ?></p>
                            <hr>
                            <p><?php echo $data->ingredients; ?></p>
                        </td>
                    </tr>
                </table>

            <?php } ?>
        </div>
    </div>
</article>
<footer class="container">
</footer>
</body>
</html>