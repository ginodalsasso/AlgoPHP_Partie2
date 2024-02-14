<h1>Exercice 09</h1>
<p> Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").</p>

<h2>Resultat</h2>

<?php

$nomsRadio = array("Monsieur","Féminin","Mademoiselle");


function afficherRadio($nomsRadio) {
    echo "<form>";

    foreach ($nomsRadio as $type) {
        echo "<br><input type='radio' name='radio' id=" . $type .">";
        echo "<label>" . $type . "</label>";
    }
    echo "</form>";
}

afficherRadio($nomsRadio);