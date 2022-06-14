<form action="" method="post">
  <input name="valor1" placeholder="Digite o primeiro valor"> <br/>
  <input name="valor2" placeholder="Digite o segundo valor"> <br/>
  <button>Enviar</button>
</form>

<?php
  if ($_POST) {
    echo "Olá, o primeiro valor foi: ".$_POST['valor1'];
    echo "</br>Segundo valor: ".$_POST['valor2'];
    echo "<br/>A soma é: ".$_POST['valor1']+$_POST['valor2'];
  }