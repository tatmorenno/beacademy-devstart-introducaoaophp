<?php

$bandas = [
  'Iron Maiden',
  'Kings of Leon',
  'Axl Rose',
  'Nickelback',
  'Motörhead'
];

echo '<ul>';
  // for ($n = 0; $n <=2 ; $n++) {

  //   echo "<li>$bandas[$n]<br></li>";

  // }
  foreach($bandas as $banda) {
    echo "<li>{$banda}<br></li>";
  }
echo '</ul>';

