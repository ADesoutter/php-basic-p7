<?php

use \Datetime;

require __DIR__.'/vendor/autoload.php';

dump($_POST);

$errors = [];

if ($_POST) {
    if (empty($_POST['login'])) {
        $errors['login'] = 'merci de remplir ce champ';
    }

    $date = new Datetime();

    if (empty($_POST['year'])) {
        $errors['years'] = 'merci de remplir ce champ';
    } elseif ($_POST['year'] < 1920) {
        $errors['years'] = 'merci de remplir une année postérieure à 1920 inclus';
    } elseif ($_POST['year'] > 2020) {
        $errors['years'] = 'merci de remplir une année antérieure à 2020 inclus';

    if (empty($_POST['email'])) {
        $errors['email'] = 'merci de remplir ce champ';
    }
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" novalidate>
        <div>
            <?php if(issets($errors['login'])): ?>
                <?= $errors['login'] ?>
            <?php endif ?>
        </div>
        <div>
            <input type="text name="login <?php if(issets($errors['login'])): ?>class="error"placeholder="<?= $errors['login'] ?>"<?php else: ?>placeholder="login"<?php endif ?> required>
        </div>
        <div>
            <?php if(issets($errors['year'])): ?>
                <?= $errors['year'] ?>
            <?php endif ?>
        </div>
        <div>
            <input type="number" name="year" placeholder="year">
        </div>
        <div>
            <?php if(issets($errors['email'])): ?>
                <?= $errors['email'] ?>
            <?php endif ?>
        </div>
        <div>
            <input type="email" name="email" placeholder="email">
        </div>
        <div>
            <button type="submit">valider</button>
        </div>
    </form>
</body>
</html>