<?php
$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';
function count_string($string){
    $string = explode(' ', $string);
    $string = array_count_values($string);
    arsort($string);
    $c = '';
    foreach($string as $key => $b){
        $c .= $key . ' - ' . $b . '<br>';
    }
    return $c;
}
echo count_string($string);
