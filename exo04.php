<h1>Exercice 04 </h1>
<p> A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).</p>

<h2>Resultat</h2>

<?php

$capitales =[
    "France" => "paris",
    "Allemagne" => "berlin",
    "USA" => "washington",
    "Italie" => "rome",
    "Espagne" => "madrid"
];

echo afficherTableHTML($capitales);

function afficherTableHTML($capitales){
    ksort($capitales);   //trie dans l'ordre alphabétique de capitales

    $result = "<table border=1>
                    <thead>
                        <tr>
                            <th>Pays</th>
                            <th>Capitale</th>
                            <th>Liens Wiki</th>
                        </tr>
                    </thead>
                    <tbody>";

    foreach ($capitales as $pays => $ville) {
        $result .= "<tr>
                        <td>" . mb_strtoupper($pays) . "</td>
                        <td>" . ucfirst($ville) . "</td>
                        <td><a href=' https://en.wikipedia.org/wiki/. $ville . ' target='_blank'>Lien</a></td> 
                    </tr>";
    }

    $result .= "</tbody></table>";

    return $result;
}
?>
