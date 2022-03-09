<?php
$budget = "1 553.89";
$achats = "1 554,76";

if ($budget >= $achats) {
    echo "Vous avez assez d'argent pour payer vos achats";
} elseif ($budget < $achats) {
    echo "Le prix de vos achats dépasse votre budget";
}
?>