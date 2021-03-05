<?php

namespace App\Tests\Search;

use App\Entity\Adherent;
use App\Search\AdherentSearch;
use PHPUnit\Framework\TestCase;

class AdherentSearchTest extends TestCase
{

    public function addProvider(){
        return [
            ["Dupont","Pierre","01012010DUPONT_PIERRE"],
            ["Du Pont","Pierre","01012010DU PONT_PIERRE"]

        ];
    }

    /**
     * @dataProvider addProvider
     */
    public function testSomething($nom,$prenom,$ident): void
    {
        $search = new AdherentSearch();
        $adherent = new Adherent();
        $adherent->setNom($nom);
        $adherent->setPrenom($prenom);
        $adherent->setDateNaissance(new \DateTime('01/01/2010'));
        $this->assertEquals($search->identifiantNormalise($adherent),
            $ident);
    }
}
