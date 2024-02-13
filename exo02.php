<h1>Exercice 02 </h1>
<p> Soit le tableau suivant :
$capitales = array
("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
une fonction personnalisée.</p>

<h2>Resultat</h2>

<?php

$capitales = [
    "France" => "paris",
    "Allemagne" => "berlin",
    "USA" => "washington",
    "Italie" => "rome"
];

echo afficherTableHTML($capitales);

function afficherTableHTML($capitales){
    ksort($capitales);                      //trie le tableau dans l'order alphabétique sur la clé
    $result = "<table border=1>             
                    <thead>
                        <tr>
                            <th>Pays</th>
                            <th>Capitales</th>
                        </tr>
                    </thead>
                <tbody>";  // ici nous avons la partie du tableau qui ne bougera pas

foreach ($capitales as $pays=>$capitale){
    $result .= "<tr>
                <td>".mb_strtoupper($pays)."</td>
                <td>".ucfirst($capitale)."</td>
            </tr>";
}

$result .= "</tbody></table>";    //   .= concatène le résultat précédent à la nouvelle valeur (fonctionne pour les strings)
return $result;
}