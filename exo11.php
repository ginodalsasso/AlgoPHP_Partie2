<h1>Exercice 11</h1>
<p> Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
chaîne de caractère représentant une date.</p>

<h2>Resultat</h2>

<?php

function formaterDateFr($dateString) {
    $date = new DateTime($dateString);

    $joursSemaine = array(
        'Monday' => 'lundi',
        'Tuesday' => 'mardi',
        'Wednesday' => 'mercredi',
        'Thursday' => 'jeudi',
        'Friday' => 'vendredi',
        'Saturday' => 'samedi',
        'Sunday' => 'dimanche',
    );

    $mois = array(
        'January' => 'janvier',
        'February' => 'février',
        'March' => 'mars',
        'April' => 'avril',
        'May' => 'mai',
        'June' => 'juin',
        'July' => 'juillet',
        'August' => 'août',
        'September' => 'septembre',
        'October' => 'octobre',
        'November' => 'novembre',
        'December' => 'décembre',
    );

    $dateFr = strtr($date->format('l j F Y'), $joursSemaine + $mois);    
    //strtr = La donnée retournée est une string dans laquelle toutes les clés du tableau ont été remplacées par les valeurs correspondantes. 
    echo $dateFr;
}

formaterDateFr("2018-02-23");