<?php

function selection_sort(&$arr, $n)
{
    for ($i = 0; $i < $n; $i++) { 
        $low = $i;
        for ($j= $i + 1; $j < $n  ; $j++) { 
            
            if($arr[$j] < $arr[$low])
            {
                $low = $j;
            }
        }

        if($arr[$i] > $arr[$low])
        {
            $temp = $arr[$i];
            $arr[$i] = $arr[$low];
            $arr[$low] = $temp;
        }
    }
}


$arr = array(64, 25, 12, 22, 11);

$len = count($arr);
selection_sort($arr, $len);

echo "Sorted array in php : \n";

for ($i=0; $i < $len; $i++) { 
    echo $arr[$i] . " ";
}


?>