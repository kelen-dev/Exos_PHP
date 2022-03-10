<?php
$pays_population = [
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000,
];
$pays20000000 = [];

echo 'Liste des pays qui ont plus de 20 000 000 : ' . "\n";
foreach ($pays_population as $pays => $population) {
    if ($pays_population >= 20000000) {
        $pays20000000[] = $population;
        echo "{$pays} => {$population}" . "\n";
    }
}
?>