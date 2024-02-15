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
    private string $vitesseActuelle;

    public function __construct(string $marque, string $modele, string $nbPorte, string $vitesseActuelle){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPorte = $nbPorte;
        $this->vitessteActuelle = $vitesseActuelle;
    }


    public function getMarque(){
        return $this->marque;
    }

    public function setMarque($marque){
        $this->marque = $marque;
        return $this;
    }


    public function getModele(){
        return $this->modele;
    }

    public function setModele($modele){
        $this->modele = $modele;
        return $this;
    }

 
    public function getNbPortes(){
        return $this->nbPortes;
    }

    public function setNbPortes($nbPortes){
        $this->nbPortes = $nbPortes;
        return $this;
    }


    public function getVitesseActuelle(){
        return $this->vitesseActuelle;
    }

    public function setVitesseActuelle($vitesseActuelle){
        $this->vitesseActuelle = $vitesseActuelle;
        return $this;
    }


    public function getInfos(){
        return $this . ""
    }
}