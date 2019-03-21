<?php
require('vendor/autoload.php');

use MiniCurso\Model\Pessoa;
use MiniCurso\Controller\IndexController;

$config = require('config/db.php');

$pessoa = new Pessoa("José",22);

$controller = new IndexController();





