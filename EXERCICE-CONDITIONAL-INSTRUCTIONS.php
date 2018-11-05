<?php
$matier1=11;
$matier2=11;
$matier3=11 ;
$moy=($matier1 + $matier2 + $matier3)/3;
    if ($moy<10) { echo "refusé";}
    if ($moy>=14){ echo "admis avec mention bien";}
    if (($moy==13) || ($moy==12)) { echo "admis avec mention assez bien";}
    if (($moy==10) || ($moy==11)) { echo "admis avec mention passable";}

    ?>