<?php
$heure = (int)readline('Entrez une heure comprise entre 0 et 24 : ');

if ($heure >= 20 || $heure <= 6) {
    echo "C'est actuellement la nuit, allez dormir !";
} elseif ($heure >= 7 && $heure <=12) {
    echo "C'est le matin";
} elseif ($heure >= 13 && $heure <20) {
    echo "Bonne après-midi";
}
?>