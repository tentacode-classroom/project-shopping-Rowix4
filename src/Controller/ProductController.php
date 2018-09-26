<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{productId}", name="product")
     */
    public function index(int $productId)
    {
        $product = new Product();
        $product->id = $productId;
        $product->name = 'product';

        return $this->render('product/index.html.twig', [
            'product_id' => $productId,
        ]);
    }
}


class Product
{
    public $id;
    public $name;
    public function upperName()
    {
        return strtoupper($this->name);
    }
}
