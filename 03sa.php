<?php
    $teamrocket = [[1,'Bulbasaur','Grass','Poison','Overgrow',45,49,49],
    [2,'Ivysaur','Grass','Poison','Overgrow',60,62,63],
    [3,'Venusaur','Grass','Poison','Overgrow',80,82,83],
    [4,'Charmander','Fire','N/A','Blaze',39,52,43],
    [5,'Charmeleon','Fire','N/A','Blaze',58,64,58],
    [6,'Charizard','Fire','Flying','Blaze',78,84,78],
    [7,'Squirtle','Water','N/A','Torrent',44,48,65],
    [8,'Wartortle','Water','N/A','Torrent',59,63,80],
    [9,'Blastoise','Water','N/A','Torrent',79,83,100],
    [10,'Caterpie','Bug','N/A','Shield Dust',50,20,55]];

    $limitnum =50;
    echo 'Pokemon with greater than and equal to ' . $limitnum . ' :';
    echo '<br>';

    function pokemon_defense($specie, $limit_number){
            echo $specie . '  ' . $limit_number;
            echo '<br>';
    }

    for($i = 0;$i < 10;$i++){
        if ($teamrocket [$i][7] >= $limitnum){
            pokemon_defense($teamrocket [$i][1], $teamrocket [$i][7]);
        }
    }
?>