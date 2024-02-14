<h1>Exercice 07</h1>
<p> Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
dans le tableau associatif si la case est cochée ou non.</p>

<h2>Resultat</h2>

<?php

$elements = [
    "Choix 1" => false,
    "Choix 2" => true,
    "Choix 3" => false
];


function alimenterListeDeroulante($elements) {
    echo "<fieldset>";
    foreach ($elements as $nom => $bool) {
        $checked = $bool ? 'checked' : ''; //    Si $valeur true, alors la valeur de la variable $cochee sera checked' sinon $valeur false, alors la variable $cochee sera une chaîne vide ''.
        echo "<div>
                <input type='checkbox' id= ' .$nom. ' name= ' .$nom . ' .$checked. '/>
                <label for= ' .$nom. ' > $nom </label>
            </div>";
    }
    echo "</fieldset>";
}



alimenterListeDeroulante($elements);