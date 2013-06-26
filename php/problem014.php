<?php
/*


 */

function collatz($value='') {
  if ($value % 2 == 0) {
    return $value / 2;
  } else {
    return (3*$value) + 1;
  }
}

$start = microtime(true);
echo $start,"\n";
$max = 0;
for ($i=1000000; $i > 1; --$i) {
  $num = $i;
  $steps = 0;
  while ($num > 1) {
    $num = collatz($num);
    $steps ++;
  }
  if (max($max, $steps) != $max) {
    $max = $steps;
    $maxNum = $i;
  }

}

echo "max: $maxNum, $max\n";
$end = microtime(true);
$diff = $end-$start;
echo "$end\n$diff\n";
