<?php

class TheSubsequences {
    // Helper function to split an integer into an array of its digits
    private function split($n) {
        $digits = [];
        while ($n > 0) {
            $digits[] = $n % 10;
            $n = intdiv($n, 10);
        }
        return array_reverse($digits);
    }

    // Function to count the numbers between A and B that fulfill the requirements
    public function count($A, $B, $C) {
        $splitC = $this->split($C);
        $count = 0;

        for ($i = $A; $i <= $B; $i++) {
            $splitX = $this->split($i);
            $pos = 0;

            foreach ($splitX as $digit) {
                if ($digit === $splitC[$pos]) {
                    $pos++;
                    if ($pos === count($splitC)) {
                        $count++;
                        break;
                    }
                }
            }
        }

        return $count;
    }
}
