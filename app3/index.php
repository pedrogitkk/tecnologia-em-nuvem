<?php

function stringParaBinario($string) {
    $binario = '';
    foreach(str_split($string) as $char) {
        $binario .= str_pad(decbin(ord($char)), 8, '0', STR_PAD_LEFT);
    }
    return $binario;
}

$frase = "olá mundo!";
$fraseBinario = stringParaBinario($frase);

echo "Frase original: " . $frase . "<br>";
echo "Frase em binário: " . $fraseBinario;

?>
