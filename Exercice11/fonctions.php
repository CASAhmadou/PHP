<?php
function prem($n):bool{
    $p=1;
    for ($i=2; $i<=$n ; $i++){ 
        if ($n%$i==0) {
            $p=$p+1;
        }
    }
        if ($p<=2) 
            return true;
        
        else return false; 
}

function tab_asso($n, &$t){

  if ($n>=10000) { 
  $t=["prem" =>[],"inf" =>[],"sup"=>[]];
  $som=0;
  $nbr=0;
    for ($i=1,$j=0; $i<$n ; $i++) { 
        if (prem($i)){
            $t['prem'][$j]=$i;
            $j++;
            $som=$som + $i;
            $nbr++;           
        }   
    }
     echo "L'ensemble des nombres premiers".'<br><br>';
    for($i=0;$i<$nbr;$i++)
        echo $t["prem"][$i].'    ';
        echo '<br><br><br>';
    
        echo "L'ensemble des nombres inférieurs".'<br><br>';
    for ($i=0; $i<=$n ; $i++)
        if ($i<=$som/$n) 
            echo $t["inf"][$j]=$i.'  '; 
            echo '<br><br><br>';  
      
    echo "L'ensemble des nombres supérieurs".'<br><br>'; 
    for ($i=0; $i<=$n ; $i++){
        if($i>$som/$n){
           echo $t["sup"][$j]=$i.'  ';    
        }   
    }
    
}
else{
    echo "invalide, le nombre doit etre supérieur à 10000";
}
}
          
?>