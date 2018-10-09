<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Product;

class WhiskyFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $category = new

        $product1 = new Product();
        $product1->setName('William Peel');
        $product1->setPrice('11.30');
        $product1->setDescription('Whisky William Peel 70cl');
        $product1->setViewCounter(0);

        $product2 = new Product();
        $product2->setName('Jack Daniel\'s');
        $product2->setPrice('26.50');
        $product2->setDescription('Whisky Jack Daniel\'s 70cl');
        $product2->setViewCounter(0);

        $manager->persist($product1);
        $manager->persist($product2);

        $manager->flush();
    }
}