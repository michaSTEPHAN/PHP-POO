<h1>Exercice VOITURE ELECTRIQUE</h1>
<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec 
qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).
Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques 
suivantes :<br>
   - Dacia Jogger     : $vc1 = new Voiture("Dacia","Jogger");<br>
   - Dacia Spring 200 : $ve1 = new VoitureElec("Dacia","Spring",200);<br>
Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :<br>
<br></p>
<h2>Résultat</h2>

<?php

// Création de la classe voitureClass
class Voiture {

    // Déclaration des attributs
    // PRIVATE : personne (à part la classe elle-même) n'a le droit d'accéder à l'élément
    // PUBLIC  : tout le monde peut accéder à l'élément
    private string $marque;
    private string $modele;
    
    // METHODE __construct : Permet de recupérer les variales passées en paramètres dans des variables
    //                       Dans la suite du code on utilisera "$this->_nom" pour tester/renvoyer "STEPHAN" 
    public function __construct(string $marque, string $modele)
    {
        $this->marque   = $marque;
        $this->modele   = $modele;
    }

    //$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
    // ACCESSEUR ET MUTATEUR du champ MARQUE
    public function getMarque(): string {
        return $this->marque;
    }
    public function setMarque(string $marque): void{
        $this->marque = $marque;
    }
    // ACCESSEUR ET MUTATEUR du champ MODELE
    public function getModele(): string {
        return $this->modele;
    }
    public function setModele(string $modele): void{
        $this->modele = $modele;
    }
    //$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

    // METHODE genereInfos : Affiche les infos sur les véhicules
    public function genereInfos(): string {
    // public function genereInfos(string $noVoiture): string {
        $texte = "<br>Infos véhicule<br>";
        $texte .= "**************<br>";
        $texte .= "Nom et modele du véhicule : $this->marque $this->modele<br>";
        return $texte;
    }

}    

include "VoitureElec.php";

$vc1 = new voitureClass("Dacia","Jogger");
$ve1 = new voitureElec("Dacia","Spring",200);

echo $vc1->genereInfos()."<br>";
echo $ve1->genereInfos();
// echo $vc1->genereInfos("v1")."<br>";
// echo $ve1->genereInfos("v2");