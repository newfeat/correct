<?php
namespace App\Controllers;

use App\Contoller;
use App\Exceptions\ProductNotFoundException;

class Products
    extends Contoller
{
    protected function actionDefault()
    {
        $this->view->products = \App\Models\Product::findAll();

        $this->view->display(__DIR__ . '/../../templates/index.php');
    }

    protected function actionOne()
    {
        $product = \App\Models\Product::findById($_GET['id']);

        if (empty($product)){
            throw new ProductNotFoundException('Нет такого товара');
        }
        $this->view->product = $product;
        $this->view->display(__DIR__ . '/../../templates/product.php');
    }
}