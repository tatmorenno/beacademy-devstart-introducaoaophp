<select>
  <option selected>-- Selecione o ano --</option>

  <?php

    $ano = 2022;

    while ($ano > 1899) {
      echo "<option>{$ano}</option>";
      $ano--;
    }
  ?>
</select>