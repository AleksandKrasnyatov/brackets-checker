<?php

declare(strict_types=1);

namespace AleksandKrasnyatov\BracketsChecker;

use RuntimeException;

class BracketsChecker
{
    public function check(string $brackets): bool
    {
        if (empty($brackets)) {
            throw new RuntimeException("Cannot check empty brackets");
        }

        $length = strlen($brackets);
        $toMakePair = 0;
        for ($i = 0; $i < $length; $i++) {
            if ($brackets[$i] === '(') {
                $toMakePair++;
            } elseif ($brackets[$i] === ')') {
                $toMakePair--;
            } else {
                throw new RuntimeException("There is no bracket in the string");
            }
            if ($toMakePair < 0) {
                return false;
            }
        }

        return $toMakePair === 0;
    }
}
