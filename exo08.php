<h1>Exercice 08</h1>
<p> Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.</p>

<h2>Resultat</h2>

<?php

$url = "http://my.mobirise.com/data/userpic/764.jpg";

function repeterImage(string $url, int $nbRepetitions){
    $result = "";
    foreach(range(1, $nbRepetitions) as $valeur) {
        $result .= "<img class='img' src=' $url ' alt='Petit Chien' />";
    }

    return $result;
}


echo repeterImage($url, 4);