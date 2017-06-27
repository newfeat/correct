<?php

namespace App\Controllers;


use App\Contoller;
use App\Exceptions\CategoryNotFoundException;

class Categories
    extends Contoller
{
    protected function actionDefault()
    {
        $this->view->categories = \App\Models\Category::findAll();

        $this->view->display(__DIR__ . '/../../templates/categories.php');
    }

    protected function actionOne()
    {
        $category = \App\Models\Category::findById($_GET['id']);

        if (empty($category)){
            throw new CategoryNotFoundException('Нет такой категории');
        }
        $this->view->category = $category;
        $this->view->display(__DIR__ . '/../../templates/category.php');
    }

}