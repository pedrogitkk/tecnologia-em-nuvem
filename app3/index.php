<?php

functuib stringParaBinario($string){
  $binario = '';
foearch(str_split($string as $char){
        $binario .=str_pad(decbin(ord($char)), 8, '0', str_pad_left) . '';
}
return $binario;

$frase = "olá mundo!";
$fraseBinario = stringParaBinario($frase);

echo "Frase original: " . $frase . "<br>";
echo "Frase em binário: " . $fraseBinario;

?>
