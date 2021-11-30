<?php

$minhaSenha = '123456';

$senhaMD5 = md5($minhaSenha);

echo "MD5: $senhaMD5 <br>";

$senhaSHA = sha1($minhaSenha);

echo "SHA1: $senhaSHA <br>";

$hashBase64 = base64_encode($minhaSenha);

echo "Base64: $hashBase64 <br>";

?>