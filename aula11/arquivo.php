<?php

$arquivo = fopen('produtos.csv', 'a+');
fwrite($arquivo, 'Tatiana'.PHP_EOL);
fwrite($arquivo, 'Cecilia'.PHP_EOL);
fwrite($arquivo, 'Necy'.PHP_EOL);
fwrite($arquivo, 'Emilia'.PHP_EOL);
fwrite($arquivo, 'Luana'.PHP_EOL);

fclose($arquivo);