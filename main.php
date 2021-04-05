<?php
// sort absoulte array
echo "Sort Absolute value";
$arr = [-8, -6, -4, -2, -1,0, 2, 4, 7, 9];
sorabs($arr);
function sorabs($arr){
    $output = [];
    $i=0; 
    $j=count($arr)-1;
    while ($i<=$j){
        echo "$arr[$i] --- $arr[$j]\n";
        if(pow($arr[$i], 2) > pow($arr[$j], 2)){
            $output[]=pow($arr[$i], 2);
            $i++;
        }else{
            $output[]=pow($arr[$j], 2);
            $j--;
        }
    }
    var_dump(array_reverse($output));
    
        
}
