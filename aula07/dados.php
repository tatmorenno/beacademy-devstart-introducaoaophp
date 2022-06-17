<?php

// array associativo

$dados = [
  'nome' => 'Chiquim',
  'sobrenome' => 'Silva',
  'cidade' => 'Fortaleza',
  'idade' => 34,
  'ano_formacao' => 2001,
  'cor_preferida ' => 'Azul',
];

# var_dump($dados);

echo "Nome: {$dados['nome']} {$dados['sobrenome']} <br>";
echo "Cidade: " . $dados['cidade'] . "<br>";
echo "Idade: " . $dados['idade'] . "<br>";
echo "Ano de Formação: " . $dados['ano_formacao'] . "<br>";