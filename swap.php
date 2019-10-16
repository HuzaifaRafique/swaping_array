<?php

function swapping(&$abc) { 
    $n = sizeof($abc); 
	$v=0;
 
    for($i = 0; $i < $n; $i++){ 
  
        for ($j = 0; $j < $n - 1; $j++){ 
             
            if ($abc[$j] > $abc[$j+1]){ 
				
				$v = $v+1;
                $t = $abc[$j]; 
                $abc[$j] = $abc[$j+1]; 
                $abc[$j+1] = $t; 
				
            for ($l = 0; $l < $n; $l++) 
				echo $abc[$l]." ";
			
			echo '</br>';
			
			}
			
		} 
		
		$GLOBALS['swap'] = $v ;
		
    } 
} 
   
$abc = array(6,4,1); 
$len = sizeof($abc); 
swapping($abc); 
$first_Element = reset($abc);
$last_Element = end($abc);

echo "Sorted array : "; 
  
for ($i = 0; $i < $len; $i++) 
    echo $abc[$i]." "; 
echo '</br>';
echo "First element : $first_Element";
echo '</br>';
echo "Last element : $last_Element";
echo '</br>';
echo "Swaps Of Numbers : $swap" ;



?>