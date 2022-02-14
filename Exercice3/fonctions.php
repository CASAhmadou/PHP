<?php
function somme($a, $b){
    return ($a+$b);
}
function exponentiel($a, $b){
    do {
        return ($a**$b);
    } while ($a >= 0 && $b>=0);
}
function difference($a, $b){
    if ($a!=$b) {
        return ("a et b sont différentes ");
    }
}
function produit(int $a, int $b)
{
    return ($a*$b);
}
function modulo(int $a, int $b){
    return ($a%$b);
}
function division(int $a, int $b){
    return ($a/$b);
}
function carre($a,$b)
{
    return (pow(somme($a,$b),2));
}

?> 