
<?php
function bissextile(int $a){
  return ((($a%4) == 0 && ($a % 100) != 0) || ($a % 400 == 0));
}
function nbrj(int $m,int $a){
    if ($m==4 || $m==6 || $m==9 || $m==11) {
        return(30);
    }elseif($m==2){
        if (bissextile($a)){
            return(29);
         }else{
            return (28);
         }
    }else{
        return (31);
    }
}

function valid($j,$m,$a):bool{
    return($j<=nbrj($m,$a));
}

function suivant($j,$m,$a){
    if (valid($j,$m,$a)) {
        if ($j==nbrj($m,$a)) {
            $j=1;
            if ($m!=12) {
                $m++;
            } else {
                $m=1; 
                $a++;
            }      
        }
       else {
            $j++;
        } 
    }
    echo $j."/".$m."/".$a;
}

function precedent($j,$m,$a){
    if (valid($j,$m,$a)) {
        if ($j!=1) {
            $j--;           
        }elseif ($m==1) {
            $j=31 && $m=12 && $a--;
        }else{
            $j=nbrj($m-1,$a);
            $m--;
        }
    }
    echo $j."/".$m."/".$a."<br><br>";
}
?>

