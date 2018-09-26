<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\WhiskyRepository;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
       $whiskyRepo = new WhiskyRepository();
       $whiskys = $whiskyRepo->findAll();

        return $this->render('homepage/index.html.twig', [
            'whiskys' => $whiskys,
        ]);
    }
}
