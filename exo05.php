<h1>Exercice 05 </h1>
<p> Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
précisant le nom des champs associés.</p>

<h2>Resultat</h2>


<?php

$nomsInput = array("Nom", "Prénom", "Ville");


function afficherInput($nomsInput) {
    echo "<form>";

    foreach ($nomsInput as $nom) {
        echo "<label>" . $nom . " :<br></label>";
        echo "<input type='text' name=" . $nom . " id=" . $nom ."><br>";
    }
    echo "</form>";
}

afficherInput($nomsInput);