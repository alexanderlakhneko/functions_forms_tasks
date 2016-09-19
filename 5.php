<?php
function search_dir($dir, $word){
    $arr = scandir($dir);
    foreach ($arr as $a){
        if (strpos($a, $word) !== false){
            $result[] = $a;
        }
    }
    if (isset($result)){
        return $result;
    }
    else{
        return 'Нет совпадений';
    }
}

print_r(search_dir(__DIR__, '3'));

