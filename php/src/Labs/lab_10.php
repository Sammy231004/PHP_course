<?php


//function findNum(array $array, int $num)
//{
//    foreach ($array as $volume) {
//        if ($volume === $num) {
//            return true;
//        }
//    }
//    return false;
//}
function countInArray(array $array, int $num)
{
    $i = 0;
    foreach ($array as $volume) {
        if ($volume === $num) {
            $i++;
        }
    }
    return $i;
}