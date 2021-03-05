<?php

namespace App\Search;

use App\Entity\Adherent;


class AdherentSearch{

    public function identifiantNormalise(Adherent $adherent){
        $nom = $adherent->getNom();
        $prenom = $adherent->getPrenom();
        $dateNaissance = $adherent->getDateNaissance();
        return $dateNaissance->format('dmY').strtoupper($nom). "_".strtoupper($prenom);
    }
}