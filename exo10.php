<h1>Exercice 10 </h1>
<p> En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-
mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement
de validation (submit).</p>

<h2>Resultat</h2>

<?php

$infoPersonne = array("Nom", "Prénom", "Email", "Ville");
$sexe = array("Masculin","Féminin");
$metier = array("Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet");



echo "<form>";

function afficherInput($infoPersonne) {
    foreach ($infoPersonne as $nom) {
        echo "<label>" . $nom . " :<br></label>";
        echo "<input type='text' name=" . $nom . " id=" . $nom ."><br>";
    }
}


function afficherSexe($sexe) {
    echo "<br></fieldset>
    <legend>Sexe</legend>";

    foreach ($sexe as $type) {
        echo "<br><input type='radio' name='radio' id=" . $type .">";
        echo "<label>" . $type . "</label>";
    }
    echo "</fieldset>";
}

echo "</form>";


function metierListeDeroulante($metier) {
    echo "<br><select name='genre' id='genre-select'>
            <option value=''>--Choisir un métier--</option>";

    foreach ($metier as $nom) {
        echo "<option value=" . $nom . ">" . $nom . "</option>";
    }
    echo "</select>";
}

afficherInput($infoPersonne);
afficherSexe($sexe);
metierListeDeroulante($metier);

echo "<div>
        <input type='submit' 'value='Submit!'/>
      </div>";
