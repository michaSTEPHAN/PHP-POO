<h1>Exercice VOITURE</h1>
<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et 
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus 
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule 
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un 
véhicule.<br><br>
v1 ➔ "Dacia","Jogger",5<br>
v2 ➔ "Renault","Scenic",4<br>
<br></p>
<h2>Résultat</h2>

<?php

// Création de la classe VOITURE
class voiture {

    // Déclaration des attributs
    // PRIVATE : personne (à part la classe elle-même) n'a le droit d'accéder à l'élément
    // PUBLIC  : tout le monde peut accéder à l'élément
    private string $marque;
    private string $modele;
    private int $nbPortes;
    private int $vitesseActuelle = 0;
    private bool $etat = false;

    // METHODE __construct : Permet de recupérer les variales passées en paramètres dans des variables
    //                       Dans la suite du code on utilisera "$this->_nom" pour tester/renvoyer "STEPHAN" 
    public function __construct(string $marque, string $modele, int $nbPortes, $etat = false)
    {
        $this->marque   = $marque;
        $this->modele   = $modele;
        $this->nbPortes = $nbPortes;
        // $this->etat  = $etat;
        // $this->vitesseActuelle = $vitesseActuelle;
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
    // ACCESSEUR ET MUTATEUR du champ NBPORTES
     public function getNbPortes(): int {
        return $this->nbPortes;
    }
    public function setNbPortes(int $nbPortes): void{
        $this->nbPortes = $nbPortes;
    }
    // ACCESSEUR ET MUTATEUR du champ VITESSEACTUELLE
    public function getVitesseActuelle(): int {
        return $this->vitesseActuelle;
    }
    public function setVitesseActuelle(int $vitesseActuelle): void{
        $this->vitesseActuelle = $vitesseActuelle;
    }
    //$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

    // METHODE genereInfos : Affiche les infos sur les véhicules
    public function genereInfos(string $noVoiture): string {
        $texte = "<br>Infos véhicule $noVoiture<br>";
        $texte .= "***********************<br>";
        $texte .= "Nom et modele du véhicule : $this->marque $this->modele<br>";
        $texte .= "Nombre de portes : $this->nbPortes<br>";
        if ($etat = false) {
            $texte .= "Le véhicule $this->marque est à l'arrêt<br>";
        } else {
            $texte .= "Le véhicule $this->marque est démarré<br>";
        } 
        $texte .= "Sa vitesse actuelle est de : $this->vitesseActuelle km/h<br>";   
        return $texte;
    }

    // METHODE afficher vitesse : On affiche la vitesse du véhicule
    public function afficherVitesse(): string {                
        $messageVitesse = "La vitesse du vehicule $this->marque $this->modele est de $this->vitesseActuelle km/h<br>";        
        return $messageVitesse;
    }   

    // METHODE demarrer : Le véhicule démarre    
    public function demarrer(): string {    
        if ($this->etat) {
            $messageDemarrer =  "Le vehicule $this->marque $this->modele est déjà démarré<br>";            
        } else {
            $this->etat = true;
            $messageDemarrer =  "Le vehicule $this->marque $this->modele demarre<br>";            
        }        
        return $messageDemarrer;
    }    

    // METHODE stopper : Le véhicule stoppe
    public function stopper(): string {    
        if ($this->etat) {
            $this->etat = false;
            $this->vitesseActuelle = 0;
            $messageStopper =  "Le vehicule $this->marque $this->modele stoppe<br>";
        } else {                 
        $this->vitesseActuelle = 0;
        $messageStopper =  "Le vehicule $this->marque $this->modele est déjà stoppé<br>";                  
        }
        return $messageStopper;  
    } 

    // METHODE accelerer : 
    //    - Si le véhicule a démaré on accelere à la vitesse demandé
    //    - Sinon on demande de demarrer le véhicule    
    public function accelerer(int $vitesse): string {            
        if ($this->etat) {
            $this->vitesseActuelle += $vitesse;   
            $messageAccelerer = "Le vehicule $this->marque $this->modele accelere de $vitesse km/h<br>";            
        } else {
            $this->vitesseActuelle = 0;
            $messageAccelerer =  "Le vehicule $this->marque $this->modele veut accélerer de $vitesse km/h<br>";
            $messageAccelerer .= "Pour accélerer il faut démarer le vehicule $this->marque $this->modele<br>";           
        }   
        return $messageAccelerer;     
    }
    
    // METHODE ralentir : 
    //    - Si le véhicule a démaré et a uen vitesse > à la vitesse
    //      de ralentissement demandé alors on ralenti de la vitesse demandé
    //    - Sinon 
    //          -> on demande de demarrer le véhicule    
    //          -> on demande de mettre une vitesse inf
    public function ralentir(int $vitesse): string {            
        if ($this->etat) {
            if  ($vitesse >  $this->vitesseActuelle) {
                $messageAccelerer = "Le vehicule $this->marque $this->modele peut ralentir au maximum de $vitesse km/h<br>";    
            }  else {
                $this->vitesseActuelle -= $vitesse;   
                $messageAccelerer = "Le vehicule $this->marque $this->modele ralentit de $vitesse km/h<br>";            
            }
        } else {
            $this->vitesseActuelle = 0;
            $messageAccelerer =  "Le vehicule $this->marque $this->modele veut ralentir de $vitesse km/h<br>";
            $messageAccelerer .= "Pour ralentir il faut démarer le vehicule $this->marque $this->modele<br> et accelérer";           
        }   
        return $messageAccelerer;     
    }

}    

$v1 = new voiture ("Dacia","Jogger",5);
$v2 = new voiture ("Renault","Scenic",4);

echo $v1->demarrer();
echo $v1->demarrer();
echo $v1->accelerer(50);
echo $v1->accelerer(30);
echo $v1->ralentir(79);
echo $v2->demarrer();
echo $v2->stopper();
echo $v2->stopper();
echo $v2->accelerer(20);
echo $v1->afficherVitesse();
echo $v2->afficherVitesse();

echo $v1->genereInfos("v1")."<br>";
echo $v2->genereInfos("v2");