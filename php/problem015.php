<?php
/*
Starting in the top left corner of a 2x2 grid, and only being able to move to the right and down, there are exactly 6 routes to the bottom right corner.


How many such routes are there through a 20x20 grid?


1372315040.9686
137846528820
1372315040.9689
0.00032997131347656

 */


function bruteForce() {
  // 2x2 box = 3x3 array
  // 3x3 box = 4x4 array
  //
  // define('MAX', 3); // 2x2 box
  define('MAX', 21); // 2x2 box

  // First rows
  for ($i=0; $i < MAX; $i++) {
    $paths[0][$i] = 1;
    $paths[$i][0] = 1;
  }
  for ($i=1; $i < MAX; $i++) {
    for ($j=1; $j < MAX; $j++) {
      $paths[$i][$j] = $paths[$i-1][$j] + $paths[$i][$j-1];
    }
  }
  return($paths[MAX-1][MAX-1]);
}

$start = microtime(true);
echo $start,"\n";

$num = 0;
echo bruteForce(), "\n";

// TODO: Lattice paths -> binomial coefficient solution
// I think this is  40 choose 20
//         40!
//     ----------
//     (20!)(20!)

$end = microtime(true);
$diff = $end-$start;
echo "$end\n$diff\n";
