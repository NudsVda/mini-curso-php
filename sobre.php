<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
    <h1>Mini Curso de PHP</h1>

    <p>Abaixo você verá uma lista sendo processada e impressa!</p>

    <?php
        $herois = ['Thor','Homem de Ferro','Vira-lata Caramelo'];
    ?>

    <ul>
        <?php
            foreach ($herois as $heroi) {
                echo '<li>' . $heroi . '</li>';
            }
        ?>
    </ul>

</head>
<body>
    
</body>
</html>