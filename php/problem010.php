<?php
/*
The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.

Find the sum of all the primes below two million.

1371884845.5784
142913828922
1371884858.746
13.167588949203
 */

function is_prime($number) {
  if ($number < 2) {
    return false;
  }
  $sqrt = sqrt($number);
  for ($i=2; $i<=$sqrt; $i++) {
    if($number % $i == 0) {
      return false;
    }
  }
  return true;
}

define('MAX', 2000000);

$start = microtime(true);
echo $start,"\n";

$sum = 2;
for ($i=3; $i < MAX; $i+=2) {
  if ($i < MAX && is_prime($i)) {
     $sum += $i;
   }
}
echo $sum, "\n";
$end = microtime(true);
$diff = $end-$start;
echo "$end\n$diff\n";

