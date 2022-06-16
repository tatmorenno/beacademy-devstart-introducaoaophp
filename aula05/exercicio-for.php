
<select>
  <option selected>-- Selecione o dia --</option>
  <?php
    $dia = 0;
    
    for ($dia = 1; $dia < 32; $dia++) {
      echo "<option>{$dia}</option>";
    }
    ?>
</select>
<select>
  <option>-- Selecione o mês --</option>
  
  <?php
    $mes = 0;
    
    for ($mes = 1; $mes < 13; $mes++) {
      echo "<option>{$mes}</option>";
    }
    ?>
</select>
<select>
  <option selected>-- Selecione um ano --</option>

<?php
  $ano = 0;

  for ($ano = 2022; $ano > 1899; $ano--) {
    echo "<option>{$ano}</option>";
  }
  ?>
</select>