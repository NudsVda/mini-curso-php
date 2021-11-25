<?php

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('views');

$twig = new \Twig\Environment($loader);

$herois = ['Thor','Homem de Ferro','Vira-lata Caramelo'];


echo $twig->render('index.html',['herois' => $herois, 'title' => 'Nossos Heróis']);
