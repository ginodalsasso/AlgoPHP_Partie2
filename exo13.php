<h1>Exercice 13</h1>
<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un
véhicule.</p>

<h2>Resultat</h2>

<?php

class Voiture {

    private string $marque;
    private string $modele;
    private string $nbPortes;
    private int $vitesseActuelle;

    public function __construct(string $marque, string $modele, string $nbPortes){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        $this->vitesseActuelle = 0;  //initialisation à 0 (sortie d'usine)
    }


    public function getMarque(): string
    {
        return $this->marque;
    }

    public function setMarque($marque){
        $this->marque = $marque;
        return $this;
    }


    public function getModele(): string
    {
        return $this->modele;
    }

    public function setModele($modele){
        $this->modele = $modele;
        return $this;
    }

 
    public function getNbPortes(): string
    {
        return $this->nbPortes;
    }

    public function setNbPortes($nbPortes){
        $this->nbPortes = $nbPortes;
        return $this;
    }


    public function getVitesseActuelle(): int
    {
        return $this->vitesseActuelle;
    }

    public function setVitesseActuelle($vitesseActuelle){
        $this->vitesseActuelle = $vitesseActuelle;
        return $this;
    }


    // Ici je crée une fonction me permettant de vérifier les informations globales qui ne changeront pas.
    public function getInfos(){
        return "Nom et modèle du véhicule : ". $this . "<br/>Nombre de portes : " . $this->nbPortes ."<br/>";
    }
  

    // Ici je crée une fonction me permettant de vérifier si le véhicule est démarre.
    public function demarrer() {
        if ($this->vitesseActuelle == 0) {
            return "Le véhicule " . $this->marque . " démarre<br/>";
         }
    }

    // Ici je crée une fonction me permettant d'accélerer le véhicule.
    public function accelerer($vitesse) {
        switch (true) {
            case $vitesse > 1:
                $this->vitesseActuelle += $vitesse;
                return "Le véhicule " . $this->marque . " accélère de " . $this->vitesseActuelle . " km/h<br/>";
            default:
                return "Pour accélérer, il faut démarrer le véhicule ";
        }
    }

    // Ici je crée une fonction me permettant de ralentir le véhicule.
    public function ralentir($vitesse) {
        if ($vitesse > 1 && $this->vitesseActuelle >= $vitesse) {
            $this->vitesseActuelle -= $vitesse;
            return "Le véhicule " . $this->marque . " ralentit de " . $this->vitesseActuelle . " km/h<br/>";
        } else {
            return "Impossible de ralentir en dessous de 0 km/h !<br/>";
        }
    }


    // Ici je crée une fonction me permettant de vérifier si le véhicule  est stoppé.
    public function stopper() {
        $this->vitesseActuelle = 0;
        return "Le véhicule " . $this->marque . " est stoppé<br/>";
    }

    
    // Ici je crée une fonction  me donnant la vitesse du véhicule.
    public function afficherVitesse(){
        return "La vitesse du véhicule " . $this . " est de : " . $this->vitesseActuelle ." km/h <br/>";
    }    


    //fonction toString afin de fusionner la marque et le modèle étant cités plusieurs fois.
    public function __toString(){
        return $this->marque ." ". $this->modele;
    }
}


$v1 = new Voiture ("Peugeot", "408", "5");
$v2 = new Voiture ("Citroën", "C4", "3");




echo "<h2>Tests véhicules</h2>*******************<br/>";

echo $v1->demarrer();
echo $v1->accelerer(50); //  accélère de 50 km/h


echo $v2->demarrer();
echo $v2->stopper();
echo $v2->accelerer(20); 
echo $v2->ralentir(20);// ralenti de 20 km/h


echo $v1->afficherVitesse(); // Affiche la vitesse actuelle

echo "<h2>Infos véhicule 1</h2>*******************<br/>";
echo $v1->getInfos();
echo $v1->afficherVitesse();

echo "<h2>Infos véhicule 2</h2>*******************<br/>";
echo $v2->getInfos();
echo $v2->afficherVitesse();



