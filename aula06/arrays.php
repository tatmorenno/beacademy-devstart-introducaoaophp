<?php
$i = 0;
$frutas = [
  'Maçã',
  'Banana',
  'Mamão'
];

$frutas[] = 'Limão';
$frutas[10] = 'Laranja';
?>

<ul>
  <?php echo "<li>{$frutas[0]}</li>"?>
  <?php echo "<li>{$frutas[1]}</li>"?>
  <?php echo "<li>{$frutas[2]}</li>"?>
</ul>
