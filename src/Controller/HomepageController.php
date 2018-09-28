<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $doctrine = $this->getDoctrine();
        $productRepository = $doctrine->getRepository(Product::class);
        $whiskys = $productRepository->findAll();

        return $this->render('homepage/index.html.twig', [
            'whiskys' => $whiskys,
        ]);
    }
}
