<?php

// Création de la classe voitureElec
class voitureElec extends voitureClass {

    // Déclaration des attributs
    // PRIVATE : personne (à part la classe elle-même) n'a le droit d'accéder à l'élément
    // PUBLIC  : tout le monde peut accéder à l'élément
    private int $autonomie;
    
    // METHODE __construct : Permet de recupérer les variales passées en paramètres dans des variables
    //                       Dans la suite du code on utilisera "$this->_nom" pour tester/renvoyer "STEPHAN" 
    public function __construct(string $marque, string $modele, int $autonomie,)
    {
        parent::__construct($marque, $modele);
        $this->autonomie = $autonomie;
    }

    //$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
    // ACCESSEUR ET MUTATEUR du champ AUTONOMIE
    public function getAutonomie(): string {
        return $this->autonomie;
    }
    public function setAutonomie(string $autonomie): void{
        $this->autonomie = $autonomie;
    }
    //$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

    // METHODE genereInfos : Affiche les infos sur les véhicules
    public function genereInfos(): string { 
        return parent::genereInfos()."Autonomie du véhicule : $this->autonomie km<br>"; ;
    }

}    