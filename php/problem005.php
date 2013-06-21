<?php
/*
2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.

What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?

*/

///////////////////////////////////////////////////////////////////////////////////////////////////
function bruteForce() {
  /*
echo microtime(true),"\n";
echo bruteForce(),"\n";
echo microtime(true),"\n";
  1371796460.8256
  232792560
  1371796551.4186
  =90.593
*/

// Already know everything below 2520 is not evenly divisible by 1->10
  $i=2518;
  $continue = true;

  while($continue) {
  // If it has to be divisible by 2 then it mus be even
  //  this means checking half the numbers
    $i +=2;
    $remainder = 0;
  // 11 -> 20 give us multiples of 1 -> 10
    for ($j=11; $j < 21; $j++) {
      $remainder += $i % $j;
    }
    $continue = $remainder>0;
  }
  return $i;
}
///////////////////////////////////////////////////////////////////////////////////////////////////





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

function get_factors($value) {
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

function prime_factorization($value='') {
  for ($i=2; $i < 21; $i++) {
    $factors[] = get_factors($i);
  }
  $master = array();
  foreach ($factors as $factor) {
    $slave = array();
    foreach ($factor as $fac) {
      $slave[$fac] += 1;
    }
    foreach ($slave as $key => $value) {
      if (!isset($master[$key])) {
        $master[$key] = $value;
      } else if ($value>$master[$key]) {
        $master[$key] = $value;
      }
    }
  }
  $total = 1;
  foreach ($master as $key => $value) {
    $total = $total * pow($key,$value);
  }
  return $total;
}

/*
1371811697.0602
232792560
1371811697.0605
=0.0003
 */

echo microtime(true),"\n";
echo prime_factorization(),"\n";
echo microtime(true),"\n";




