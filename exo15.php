<h1>Exercice 15</h1>
<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une
adresse e-mail a le bon format.</p>

<h2>Resultat</h2>

<?php

// Adresse e-mail à vérifier
$email1 = "elan@elan-formation.fr";
$email2 = "contact@elan";


 // FILTER_VALIDATE_EMAIL = En général, ceci valide l'adresse de courriel selon la syntaxe 
if (filter_var($email1, FILTER_VALIDATE_EMAIL)) {        
    echo "L'adresse $email1 est une adresse e-mail valide.";
} else {
    echo "L'adresse $email1 est une adresse e-mail invalide.";
}

echo "<br>";


if (filter_var($email2, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse $email2 est une adresse e-mail valide.";
} else {
    echo "L'adresse $email2 est une adresse e-mail invalide.";
}

