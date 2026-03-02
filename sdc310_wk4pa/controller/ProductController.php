<?php
require_once __DIR__ . '/../model/ProductModel.php';

class ProductController
{
    private ProductModel $model;

    public function __construct()
    {
        $this->model = new ProductModel();
    }

    public function handleRequest(): void
    {
        $message = '';

        try {
            $products = $this->model->getAllProducts();
        } catch (Throwable $e) {
            $products = [];
            $message = "Error: " . $e->getMessage();
        }

        require __DIR__ . '/../view/display_products.php';
    }
}