<?php

namespace Qgt\Kata\ChaserSSchedule;

final class ChaserSSchedule
{
    function sequence(int $s, int $t): int|string
    {
        $d = "%s must be between 1 and 1000 (1 <= %s < 1000)";

        if (1 > $s || $s >= 1000) {
            $d = sprintf($d, "Speed", 's');
        } else if (1 > $t || $t >= 1000) {
            $d = sprintf($d, "Time", 't');
        } else {
            $d = $s * $t;
            for ($i = 0; $i < ceil($t/2); $i++) {
                if ($s - 3 * $i > 0) {
                    $d += $s - 3 * $i;
                }
            }
        }

        return $d;
    }
}