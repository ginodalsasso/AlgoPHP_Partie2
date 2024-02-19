<h1>Exercice 14</h1>
<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec
qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).</p>

<h2>Resultat</h2>

<?php

class Voiture{

    public string $marque;
    public string $modele;

    public function __construct(string $marque, string $modele){
        $this->marque = $marque;
        $this->modele = $modele;
    }

        public function getMarque(): string
        {
                return $this->marque;
        }

        public function setMarque($marque)
        {
                $this->marque = $marque;
                return $this;
        }


        public function getModele(): string
        {
                return $this->modele;
        }

        public function setModele($modele)
        {
                $this->modele = $modele;
                return $this;
        }


        public function getInfos(){
            return "Nom du véhicule : " . $this->marque .  "<br/>Modèle du véhicule : ". $this->modele ;
        }
}


class VoitureElec extends Voiture{
    
    public string $autonomie;

    public function __construct($marque, $modele, $autonomie) {
        parent::__construct($marque, $modele);
        $this->autonomie = $autonomie;
    }


        public function getAutonomie(): string
        {
            return $this->autonomie;
        }


        public function setAutonomie($autonomie)
        {
            $this->autonomie = $autonomie;

            return $this;
        }


        public function getInfos(){
                return parent::getInfos() ."<br/>Autonomie : " .$this->autonomie;        
        }
}


$v1 = new Voiture("Peugeot","408");
$ve1 = new VoitureElec("BMW","I3",100);

echo $v1->getInfos()."<br/>";
echo $ve1->getInfos()."<br/>";