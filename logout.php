<?php

session_start();

unset($_SESSION['usuario']);

header('Location: form-sessao.php');

?>