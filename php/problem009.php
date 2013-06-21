<?php
/*
A Pythagorean triplet is a set of three natural numbers, a < b < c, for which,

a^2 + b^2 = c^2
For example, 3^2 + 4^2 = 9 + 16 = 25 = 5^2.

There exists exactly one Pythagorean triplet for which a + b + c = 1000.
Find the product abc.


1371830850.978
31875000
1371830874.018

 */


// TODO: I think this could be more efficient
echo microtime(true),"\n";

for ($a=2; $a<1000 ; $a++) {
  for ($b=2; $b<1000 ; $b++) {
    for ($c=2; $c<1000 ; $c++) {
      if (($a*$a) + ($b*$b) === ($c*$c)) {
        // echo "$a ^2 + $b ^2 == $c ^2 \n";
        if ($a+$b+$c === 1000) {
          echo "a: $a, b: $b, c: $c\n";
          echo $a*$b*$c,"\n";
          echo microtime(true),"\n";
          die();
        }
      }
    }
  }
}