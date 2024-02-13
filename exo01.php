<h1>Exercice 01 </h1>
<p> Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de
caractère passée en argument en majuscules et en rouge.</p>

<h2>Resultat</h2>


<style>
    .red{
        color: red;
    }
</style>


<?php

$text = "Mon texte en paramètre";
$text2 = "Mon autre texte en argument";

echo convertirMajRouge($text);
echo convertirMajRouge($text);
echo convertirMajRouge2($text);

echo convertirMajColor ($text, '#56319');    //énumeration de la couleur souhaitée

function convertirMajRouge($text){
    $result = mb_strtoupper($text);  //permet de convertir en MAJ
    $result = "<p class='red'>$result</p>";
    return $result;
}

function convertirMajRouge2($text){    //même fonction permettant de réduire 3 lignes en une.
    return "<p class='red'>".mb_strtoupper($text)."</p>";  
}

function convertirMajColor($text, $color){  //fonction permettant de choisir une couleur en fonction du cas
    return "<p class='color:$color'>".mb_strtoupper($text)."</p>";
}