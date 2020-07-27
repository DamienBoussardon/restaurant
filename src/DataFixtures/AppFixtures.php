<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $categories = ["Entrée","Plat", "Dessert"];
        foreach ($categories as $value) {
            $category = new Category();
            $category->setName($value);
            $category->setImage("image_".$value);
            $manager->persist($category);
        }

        $manager->flush();
    }
}
