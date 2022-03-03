<?php
    require_once "../includes/db_in.php";
    require_once "Auto.php";

    $data = $_POST;
    mysqli_set_charset($db_con, "utf8");
    $select = mysqli_query($db_con, "SELECT * FROM people");
    $arr_fill = new Auto(mysqli_fetch_all($select, MYSQLI_ASSOC));
    $arr_fill->filling();



    if(isset($data['enter']))
    {
        $errors = [];
        if(trim($data['login']) == '')
            $errors[] = 'Введите логин!';
        if(trim($data['password']) == '')
            $errors[] = 'Введите пароль!';
        if(empty($errors)){
            $arr_fill->check($data);
        }
        else
            echo array_shift($errors);
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
    <link rel="stylesheet" href="../style/styleauthor.css">
</head>
<body>

    <form method="post" class="form">
        <h1>Вход</h1>
        <div class="input_form">
            <input type="text" name="login" value="<? echo @$data['login'];?>" placeholder="Login">
        </div>
        <div class="input_form">
            <input type="password" name="password" placeholder="Password">
        </div>
        <div class="input_form">
            <input type="submit" name="enter" value="Войти">
        </div>
        <a href="../registration/registration.php" target="_blank" class="input_form" style="color: #fff; text-decoration: none;">Регистрация</a>
    </form>
</body>
</html>