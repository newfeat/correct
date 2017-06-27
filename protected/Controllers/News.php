<?php
namespace App\Controllers;

use App\Contoller;
use App\Exceptions\ArticleNotFoundException;
use App\Exceptions\ProductNotFoundException;

class News
    extends Contoller
{
    protected function actionDefault()
    {
        $this->view->news = \App\Models\Article::findAll();

        $this->view->display(__DIR__ . '/../../templates/news.php');
    }

    protected function actionOne()
    {
        $article = \App\Models\Article::findById($_GET['id']);

        if (empty($article)){
            throw new ArticleNotFoundException();
        }
        $this->view->article = $article;
        $this->view->display(__DIR__ . '/../../templates/article.php');
    }
}