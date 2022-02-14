<?php
  function vide($num):bool{
    return empty($num); 
}

function chiffre($num):bool{
    return is_numeric($num);
}

function negatif($num){
    if ($num<=0){
        return ($num);
    }
}

function verifie($num,string $key, array &$arrError):void{
    if (vide($num)) {
        $arrError[$key]="Saisir une valeur valide";
    }elseif (!chiffre($num)) {
            $arrError[$key]="valeur non valide";
        }
        else{
            if (negatif($num)) {
                $arrError[$key]="saisir un nombre positive";
            }
            
        }
    }
?>