<?php
$hauteur = 0;

for ($ligne = 8; $ligne >= $hauteur; $ligne--) {
    for ($i = 1; $i <= $ligne; $i++) {
        echo "*";
    }
    echo "\n";
}