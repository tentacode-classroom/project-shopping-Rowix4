<?php

namespace App\Controller;

use App\Repository\WhiskyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{productId}", name="product")
     */
    public function index(int $productId)
    {
        $whiskyRepo = new WhiskyRepository();
        $whisky = $whiskyRepo->findById($productId);

        return $this->render('product/index.html.twig', [
            'whisky' => $whisky,
        ]);
    }
}
