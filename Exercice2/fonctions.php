<?php
function perimetre($long, $larg ){
    return ($long+$larg)*2;
}
function surface(int $long, int $larg):int{
    return($long*$larg);
}
function diagonale(int $long, int $larg):int{
    return sqrt(pow($long,2)+pow($larg,2));
}
?>