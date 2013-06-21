<?php
/*
A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 x 99.

Find the largest palindrome made from the product of two 3-digit numbers.
*/
function is_palindrome($value='') {
  return ($value == strrev($value));
}


// TODO: This works, but I think it could be more efficient
for ($i=999; $i > 99; $i--) {
  for ($j=999; $j > 99; $j--) {
    if (is_palindrome($i*$j)) {
      if ($pal < $i*$j) {
        $pal = $i*$j;
      }
    }
  }
}

echo $pal, "\n";