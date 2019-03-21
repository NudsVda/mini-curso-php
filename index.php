<?php
require('vendor/autoload.php');

use MiniCurso\Model\Pessoa;
use MiniCurso\Controller\IndexController;

$config = require('config/db.php');

$db = new PDO("mysql:host=localhost;port=3306;dbname={$config['db']}",$config['user'],$config['password']); 
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
    $select = $db->query("SELECT * FROM pessoa");
    $result = $select->fetchAll(PDO::FETCH_OBJ);
    foreach($result as $r) {
        echo $r->nome .  "\n" ;
    }
} catch(PDOExpection $e) {
    die($e->getMessage());
}
