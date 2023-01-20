<?php

$data = [];

function setData($count, $min, $max, $weight_min, $weight_max)
{
    $data = [];
    for ($i = 0; $i < $count; $i++) {
        $data[$i]['quantity'] = rand($min, $max);
        if($data[$i]['quantity']===0){
            $data[$i]['weight'][] = 0;
        }else{
            for ($j = 0; $j < $data[$i]['quantity']; $j++) {
                $data[$i]['weight'][] = rand(150, 180);
            }
        }

    }

    return $data;
}

$data['apple'] = setData(10, 40, 50, 150, 180);
$data['pear']  = setData(15, 0, 20, 130, 170);

return $data;