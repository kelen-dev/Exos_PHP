<?php
$age = (int)readline('Quel est votre âge ?');

if ($age >= 18) {
    echo "Vous êtes majeur(e)";
} elseif ($age < 18) {
    echo "Vous êtes mineur(e)";
}
?>