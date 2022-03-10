<?php
$nbr = [];
$tab_50 = [];
$tab = [];

for ($i = 0; $i < 10; $i++) {
    $nbr[] = rand((int)$min = 0, (int)$max = 100);
}

foreach ($nbr as $nombre) {
    if ($nombre < 50) {
        $tab_50[] = $nombre;
    } elseif ($nbr >= 50) {
        $tab[] = $nombre;
    }
}

echo '<50 : ';
foreach ($tab_50 as $value) {
    echo $value . " ";
}

echo "\n";

echo '>50 : ';
foreach ($tab as $value) {
    echo $value . " ";
}
?>