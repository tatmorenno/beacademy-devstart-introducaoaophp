<?php

$notasCursoA = [
  10,
  9,
  8.5,
  10,
];

$notasCursoB = [
  8.5,
  9,
  8.5,
  7,
];

function mediaDeNotas(array $notas): float
{
  // $total = 0;
  // $quantidade = 0;

  // foreach ($notas as $cadaNota)
  // {
  //   $total += $cadaNota;
  //   $quantidade++;
  // }

  return array_sum($notas) / count($notas);

}

echo mediaDeNotas($notasCursoA).PHP_EOL;
echo mediaDeNotas($notasCursoB);