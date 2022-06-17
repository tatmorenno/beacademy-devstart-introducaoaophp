<?php

$bandas = [
  ['Iron Maiden', '2'],
  ['Kings of Leon', '4'],
  ['Axl Rose', '3'],
  ['Nickelback', '6'],
  ['Motörhead', '1']
];

echo '<ul>';

  foreach($bandas as $banda) {
    echo "<li>{$banda}<br></li>";
  }
echo '</ul>';

