<?php
// PHP Fatal error:  Allowed memory size of 536870912 bytes exhausted (tried to allocate 536870920 bytes) in /workspace/Main.php on line 7
$sequence = array();
fscanf(STDIN, "%s\n", $limit);
echo $limit . "\n";
foreach (range(0, $limit) as $number) {
    $sequence[$number] = $number;
}
$sumPosterior = 0;
$y = 0;
$pivots = array();
$antecesor = 0;
$posterior = 0;
$last = count($sequence) - 1;
for ($x = $sequence[0]; $x <= $last; $x++){
  $sumAnterior = 0;
  $sumPosterior = 0;
  if ($x > 1){
    $y = $x;
    $z = $x;
    for ($y; $y > 0; $y--){
      $antecesor = ($y - 1);
      $sumAnterior += $antecesor;
    }
    for ($z; $z <= ($last-1); $z++ ){
        $posterior = ($z+1);
        $sumPosterior += $posterior;
          if ($sumPosterior > $sumAnterior){
            break;
          }
        if ($sumPosterior == $sumAnterior){
            echo "!!! PIVOTE ENCONTRADO: ".$x." !!! \n";
          }
        }
    }
  }
?>