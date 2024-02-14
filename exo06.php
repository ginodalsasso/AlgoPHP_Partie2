<h1>Exercice 06 </h1>
<p> Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
de valeurs.</p>

<h2>Resultat</h2>

<?php

$elements = array("Monsieur","Madame","Mademoiselle");


function alimenterListeDeroulante($elements) {
    echo "<select name='genre' id='genre-select'>";

    foreach ($elements as $nom) {
        echo "<option value=" . $nom . ">" . $nom . "</option>";
    }
    echo "</select>";
}

alimenterListeDeroulante($elements);



