<?php
/*
The prime factors of 13195 are 5, 7, 13 and 29.

What is the largest prime factor of the number 600851475143 ?
*/

// define('MAX', 13195);
define('MAX', 600851475143);

function is_prime($number) {
  if ($number < 2) {
    return false;
  }
  for ($i=2; $i<=($number / 2); $i++) {
    if($number % $i == 0) {
      return false;
    }
  }
  return true;
}

if (is_prime(MAX)) {
  // Already prime
  die (MAX . "is a prime number");
}

function get_factors($value) {
  echo "get_factors($value)\n";
  $factors = array();
  if (is_prime($value)) {
    $factors[]=$value;
    return $factors;
  }

  $pos = 2;

  while ($pos <= ceil($value/2)) {
    if (is_prime($pos)) {
      if ($value % $pos === 0) {
        // Store first arg
        array_push ($factors, $pos);

        // Get factors of second factor
        $factors = array_merge($factors, get_factors(ceil($value/$pos)));

        $pos = $value;
      }
    }
    $pos++;
  }
  return $factors;
}

$factors = get_factors(MAX);
echo "\n[";
$factor_string = "";
foreach ($factors as $factor) {
  $factor_string .= "$factor, ";
}
echo substr($factor_string, 0, -2);
echo "]\n";


