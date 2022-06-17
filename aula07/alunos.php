<?php

$a1 = [
  'nome'     => 'Chiquita',
  'email'    => 'chiquitadasilva@gmail.com',
  'telefone' => '81 9 8765-4321',
  'notas'    => [
    9,
    8.5,
    7,
    10
  ]
];

$a2 = [
  'nome'     => 'Chiquim',
  'email'    => 'chiquimdasilva@gmail.com',
  'telefone' => '81 9 7865-4321',
  'notas'    => [
    8,
    7.5,
    9,
    9.5
  ]
];

$a3 = [
  'nome'     => 'Tati',
  'email'    => 'tatmorenno@gmail.com',
  'telefone' => '81 9 9865-4321',
  'notas'    => [
    10,
    9.5,
    9,
    9.5
  ]
];

$a4 = [
  'nome'     => 'Joao',
  'email'    => 'joaont@gmail.com',
  'telefone' => '81 9 6865-4321',
  'notas'    => [
    10,
    9.5,
    9,
    9.5
  ]
];


$alunos = [
  $a1,
  $a2,
  $a3,
  $a4,
];

?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container">
  <h1 class="mt-5">Alunos</h1>
  <hr>
  <table class="table table-hover table-striped mt-5 ">
    <thead class="table-dark">
      <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
      </tr>
    </thead>
    <tbody>
    <?php

        foreach ($alunos as $cadaAluno) {
          echo '<tr>';
            echo '<td>' . $cadaAluno['nome'] . '</td>';
            echo '<td>' . $cadaAluno['email'] . '</td>';
            echo '<td>' . $cadaAluno['telefone'] . '</td>';
          echo '</tr>';
        }
      ?>
    </tbody>
  </table>
</div>