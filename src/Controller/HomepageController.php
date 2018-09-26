<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Product 1',
            ],
            [
                'id' => 2,
                'name' => 'Product 2',
            ],
            [
                'id' => 3,
                'name' => 'Product 3',
            ],
        ];

        return $this->render('homepage/index.html.twig', [
            'products' => $products,
        ]);
    }
}
