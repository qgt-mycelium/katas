<?php

function removeConsecutiveDuplicateWords (string $phrase)
{
    $arrInput = explode(' ', $phrase);
    $arrOutput = [];

    foreach ($arrInput as $word) {
        if (end($arrOutput) != $word) {
            $arrOutput[] = $word;
        }
    }

    return implode(' ', $arrOutput);
}