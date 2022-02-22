<?php
namespace App\controller;

use App\model\ProductModel;

class ProductController
{
    public $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function getAllProduct()
    {
       $products = $this->productModel->getAll();
       include_once "App/view/product/list.php";
    }


    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"]== "GET"){
            include "App/view/product/create.php";
        }
        else {
            $this->productModel->create($_REQUEST);
            header("location:index.php?page=product-list");
        }
    }


    public function edit()
    {
        if (isset($_REQUEST['id'])) {
            $product = $this->productModel->getById($_REQUEST['id']);
            include_once "App/view/product/update.php";
        }
    }



    public function update()
    {
        $this->productModel->update($_REQUEST);
        header("Location:index.php?page=product-list");
    }

    public function delete($id)
    {
        $this->productModel->deleteById($id);
        header("location:index.php?page=product-list");
    }
}