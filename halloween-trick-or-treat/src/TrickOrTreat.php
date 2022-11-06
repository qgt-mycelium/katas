<?php

function trickOrTreat(int $children, array $candies): string
{
    $candiesAvailable = [];
    $sameAmountOfCandy = true;
    $lastAmountOfCandy = 0;
    $messageTrickOrTreat = "Trick or treat!";

    // No children get the "bomb" ;-)
    $candiesWithBombs = array_filter($candies, function ($packet) use (&$candiesAvailable) {
        if (in_array('bomb', $packet)) {
            return true;
        }
        $candiesAvailable[] = array_count_values($packet);
        return false;
    });

    if (count($candies) - count($candiesWithBombs) < $children && count($candiesWithBombs) > 0) {
        return $messageTrickOrTreat;
    }

    // Each child has at least two candies
    // Each child gets the same amount of candy
    $candiesTwo = array_filter($candiesAvailable, function ($packet) use (&$sameAmountOfCandy, &$lastAmountOfCandy) {
        if (isset($packet['candy'])) {
            if ($lastAmountOfCandy != $packet['candy']) {
                if ($lastAmountOfCandy > 0) {
                    $sameAmountOfCandy = false;
                }
                $lastAmountOfCandy = $packet['candy'];
            }
            return $packet['candy'] >= 2;
        }
        return false;
    });

    if (count($candiesTwo) < $children || $sameAmountOfCandy == false) {
        return $messageTrickOrTreat;
    }

    return "Thank you, strange uncle!";
}
