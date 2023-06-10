<?php

function sortElementsOfA2BasedIndexOfA1(array $a1, array $a2)
{
    $arr = array_map(function ($item) {
        return substr($item, 0, 1);
    }, $a1);

    usort($a2, function ($a, $b) use ($arr) {

        $posA = array_search(substr($a, 0, 1), $arr);
        $posB = array_search(substr($b, 0, 1), $arr);

        return $posA - $posB;
    });

    return $a2;
}
