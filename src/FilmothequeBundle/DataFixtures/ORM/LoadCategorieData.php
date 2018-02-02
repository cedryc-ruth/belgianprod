<?php
namespace App\DataFixtures;

use App\Entity\Categorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategorieFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $cats = ['drame','histoire','romance','science-fiction'];
        
        // create 20 products! Bam!
        foreach ($cats as $cat) {
            $categorie = new Categorie();
            $categorie->setNom($cat);
            
            $manager->persist($categorie);
        }

        $manager->flush();
    }
}