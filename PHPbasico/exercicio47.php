<?php
$res = file_get_contents('https://random-data-api.com/api/business_credit_card/random_card');
$arq = fopen("cartao.txt", "w+");

fwrite($arq, $res);
fclose($arq);
$res = file_get_contents("cartao.txt");

var_export($res);
?>