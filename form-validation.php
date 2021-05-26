<?php

require __DIR__.'/vendor/autoload.php';

dump($_POST);

if ($_POST) {
    if (empty($_POST['login'])) {
        $errors['login'] = 'merci de remplir ce champ';
    }

    if (empty($_POST['year'])) {
        $errors['years'] = 'merci de remplir ce champ';
    }

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
            <input type="text" name="login" placeholder="login">
        </div>
        <div>
            <input type="number" name="year" placeholder="year">
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