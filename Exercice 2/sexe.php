<?php
$sexe = readline('Quel est votre sexe ?');

if ($sexe == 'homme') {
    echo "vous êtes un homme";
} elseif ($sexe == 'femme') {
    echo "Vous êtes une femme";
} else {
    echo "non défini";
}