<?php

$title = 'Git Remote';
$name = ['Dzulfikar Sauki Akmal', 'Zuni Anifah', 'Abdurrahman', "Ja'far Dzulfikar"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>
    <h1><?= $title ?></h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores debitis temporibus a perspiciatis deleniti. Quaerat deleniti, amet beatae possimus voluptate consequatur. Corrupti eligendi adipisci sunt atque iste magnam assumenda dolorem illum ab ex aut, mollitia ducimus quisquam qui omnis possimus.</p>
    <ul>
        <?php foreach ($name as $n) : ?>
            <li><?= $n ?></li>
        <?php endforeach ?>
</body>

</html>