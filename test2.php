<?php 



function HammingDistanceSolution($binary1, $binary2) {
    
    $a1 = str_split($binary1);
   // print_r($a1); exit;

    $a2 = str_split($binary2);
   // print_r($a2); exit;
    
    $dh = 0; //initial value zero
    
    for ($i = 0; $i < count($a1); $i++) {
        
        if($a1[$i] != $a2[$i]) { //this is the distance that we are trying to solved
             $dh++; //we measure by incrementing 1 of the precende order value of binary 1 does not match to binary 2
        }
    } 
    return $dh; // then we return the distance value
}

echo HammingDistanceSolution('0001','0100');