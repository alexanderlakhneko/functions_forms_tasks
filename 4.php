<?php
function cur_dir($dir){
    return scandir($dir);
}
print_r (cur_dir(__DIR__));