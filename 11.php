<?php
$a = 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался. а там хоть трава не расти.';
function up_st($a){
    $c = explode('.',$a);
    $c[0] = ' ' . $c[0];
    foreach($c as $key => $d){
        $c[$key] = mb_strtoupper(mb_substr($d,1,1)) . mb_substr($d,2,strlen($d));
    }
    return implode('. ', $c);
}
echo up_st($a);
