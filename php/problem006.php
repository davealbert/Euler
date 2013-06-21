<?php
/*
The sum of the squares of the first ten natural numbers is,

1^2 + 2^2 + ... + 10^2 = 385
The square of the sum of the first ten natural numbers is,

(1 + 2 + ... + 10)^2 = 55^2 = 3025
Hence the difference between the sum of the squares of the first ten natural numbers and the square of the sum is 3025  385 = 2640.

Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.

1371820037.33
25164150
1371820037.3301

 */

function brute_force($max='') {
  $sqr_sum = $sum = 0;
  for ($i=1; $i < $max+1; $i++) {
    $sum += $i;
    $sqr_sum += pow($i, 2);
  }

  return pow($sum, 2) - $sqr_sum;
}

echo microtime(true),"\n";
echo brute_force(100),"\n";
echo microtime(true),"\n";