<?php

namespace Qgt\Kata\PrizeDraw;

final class PrizeDraw
{
    private string $alphabet = 'abcdefghijklmnopqrstuvwxyz';

    function som(string $firstname): int 
    {
        $sum = strlen($firstname);
        $firstname = str_split(strtolower($firstname));
        foreach ($firstname as $letter) {
            $sum += strpos($this->alphabet, $letter) + 1;
        }
        return $sum;
    }

    function winningNumber(string $firstname, int $weight = 1): int
    {
        return $this->som($firstname) * $weight;
    }

    function getRankList(string $firstnames, array $weights): array
    {
        $list = [];
        $participants = explode(',', $firstnames);

        for ($i = 0; $i < count($participants); $i++) {
            $winningNumber = $this->winningNumber($participants[$i], $weights[$i] ?? 1);
            $list[$participants[$i]] = $winningNumber;
        }

        arsort($list);
        return $list;
    }

    function searchWithRank(string $st, array $we, int $n): string
    {
        if (empty($st)) { 
            return "No participants";
        }

        if ($n > count(explode(',', $st))) {
            return "Not enough participants";
        }

        $rankList = array_keys($this->getRankList($st, $we));
        return $rankList[($n < 0 ? 1 : $n - 1)];
    }
}