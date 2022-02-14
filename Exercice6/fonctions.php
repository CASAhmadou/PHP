<title>Exercice6</title>
<link rel="stylesheet" href="../Exercice2/css/style.css">
    <div id=correction>
        <h1> 
<?php

    function equationSecondDegre(int|float $a,int|float $b,int|float $c){
        $delta=pow($b,2)-4*$c*$a;
        //<- :affectation +>  =
        //== ou ===
        if($delta==0){
            echo "La solution est ".(-1*$b/2*$a);
        }
        if ($delta<0){
            echo "l'équation n'a pas de solutions";
        }else {
            echo "L'équation admet deux solutions distincts ".(-$b-sqrt($delta))/2*$a. " et " .(-$b+sqrt($delta))/2*$a;
        }
    }
    
?>
        </h1>