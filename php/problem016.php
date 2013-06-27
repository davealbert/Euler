<?php
/*
2^15 = 32768 and the sum of its digits is 3 + 2 + 7 + 6 + 8 = 26.

What is the sum of the digits of the number 2^1000?

1372318675.7938
1366
1372318675.862
0.068188905715942

 */


$start = microtime(true);
echo $start,"\n";


$num = "2";
for ($i=1; $i <1000; ++$i) {
  $len = strlen($num) - 1;
  $carry = 0;
  $temp = "";
  for ($j=$len; $j >= 0 ; --$j) {
    $x = ($num[$j] * 2) + $carry;
    $y = $x % 10;
    $carry = (int)($x/10);
    $temp = $y.$temp;
  }
  $num = $temp;
  if ($carry > 0) {
    $num = $carry.$temp;
  }
}
// TODO: There must be a better way to get large numbers
// I think array_map might have something to do with the solution

$len = strlen($num);
$sum = 0;
for ($i=0; $i < $len; $i++) {
  $sum += intval($num[$i]);
}

echo "$sum\n";

$end = microtime(true);
$diff = $end-$start;
echo "$end\n$diff\n";