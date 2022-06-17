<form action="" method="post">
  <input name="valor1" placeholder="Digite o primeiro valor">
  <input name="valor2" placeholder="Digite o segundo valor">

  <button name="soma">Somar</button>
  <button name="subtracao">Subtrair</button>
  <button name="multiplicacao">Multiplicar</button>
  <button name="divisao">Dividir</button>
</form>

<?php
  if ($_POST) {
    
    if (isset($_POST['soma'])) {
      #$soma = $_POST['valor1'] + $_POST['valor2'];
      echo "Olá, o primeiro valor foi: ".$_POST['valor1'];
      echo "</br>Segundo valor: ".$_POST['valor2'];
      echo "<br/><br/><strong>A soma dos dois números é: " . $_POST['valor1'] + $_POST['valor2']."</strong>";
      // echo "<br/><br/><strong>A soma dos dois números é: {$soma} </strong>";      
    }

    if (isset($_POST['subtracao'])) {
      echo "Olá, o primeiro valor foi: ".$_POST['valor1'];
      echo "</br>Segundo valor: ".$_POST['valor2'];
      echo "<br/><br/><strong>A subtração dos dois números é: " . $_POST['valor1'] - $_POST['valor2']."</strong>";
    }

    if (isset($_POST['multiplicacao'])) {
      echo "Olá, o primeiro valor foi: ".$_POST['valor1'];
      echo "</br>Segundo valor: ".$_POST['valor2'];
      echo "<br/><br/><strong>A multiplicação dos dois números é: " . $_POST['valor1'] * $_POST['valor2']."</strong>";
    }

    if (isset($_POST['divisao'])) {
      echo "Olá, o primeiro valor foi: ".$_POST['valor1'];
      echo "</br>Segundo valor: ".$_POST['valor2'];
      echo "<br/><br/><strong>A divisão dos dois números é: " . $_POST['valor1'] / $_POST['valor2']."</strong>";
    }
  }