<?php
/*
By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.

What is the 10 001st prime number?

1371822113.1234
104743
1371822117.5937
 */

function sieve_of_Eratosthenes($max) {
  $primes = array(2);
  $pos = 2;
  while (count($primes)<$max) {
    ++$pos;

    $push = true;
    foreach ($primes as $prime) {
      if ($pos % $prime == 0) {
        $push = false;
        break;
      }
    }
    if ($push) {
      array_push($primes, $pos);
    }
  }
  echo($primes[count($primes)-1]);
}


echo microtime(true),"\n";
echo sieve_of_Eratosthenes(10001),"\n";
echo microtime(true),"\n";