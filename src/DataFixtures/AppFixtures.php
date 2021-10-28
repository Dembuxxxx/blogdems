<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        for($i = 0; $i < 10; $i++) {
            $post = new Post();
            $post->setTitle('Titre 1')
                ->setContent("Lorem ipsum")
                ->setAuthor('Demba Soumare')
                ->setCreateAt(new \DateTime());
            
            $manager->persist($post);
        }

        $manager->flush();
    }
}
