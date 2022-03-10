<?php
$nbr = [];

for ($i = 0; $i < 10; $i++) {
    $nbr[] = rand((int) $min = 0, (int) $max = 100);
}

print_r($nbr);

echo "\n";

if (in_array(42, $nbr)) {
    echo "Le chiffre 42 a été trouvé";
} else {
    echo "le chiffre 42 n'a pas été trouvé :(";
}
?>