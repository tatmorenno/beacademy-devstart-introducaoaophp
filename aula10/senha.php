<?php

$senha = '1234567890';
$code = 'MTIzNDU2Nzg5MA==';

echo base64_encode($senha).PHP_EOL;
echo base64_decode($code).PHP_EOL;
echo md5($senha);