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
 
    function hp_sum(){
    $sum = 0;

        for($i = 0;$i < 10;$i++){
            $sum += $GLOBALS['teamrocket'][$i][5];
        }
        return $sum;
    }
        echo 'The sum of hp is '.hp_sum().'<br>';;

    function ave_attack(){

        $average = 0;

        for($i = 0;$i < 10;$i++){
            $average += $GLOBALS['teamrocket'][$i][6];
        }
        return $average/10;
    }
         echo 'The average attack is '.(ave_attack());
    ?>
