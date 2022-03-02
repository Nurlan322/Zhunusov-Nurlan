<?php
    $hostname = 'localhost';
    $username = 'Nurlan';
    $password = '123';
    $dbname = 'factdb';
    $db_con = mysqli_connect($hostname, $username, $password, $dbname);

    $data = $_POST;

    if(isset($data['enter']))
    {
        if($data['password'] == $data['rpassword'])
        {
            $name = $data['name'];
            $login = trim($data['login']);
            $rpassword = md5($data['rpassword']);
            $query = "INSERT INTO `people`(`ID_person`, `name`, `login`, `password`) VALUES (NULL, '$name', '$login', '$rpassword')";
            $insert = mysqli_query($db_con, $query);
            echo "Вы зарегистрировались!";
        }
        else 
            echo 'Пароли должны быть одинаковыми';
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
    <link rel="stylesheet" href="../style/styleauthor.css">
</head>
<body>

    <form method="post" class="form">
        <h1>Регистрация</h1>
        <div class="input_form">
            <input type="text" name="name" value="<? echo @$data['name'];?>" placeholder="Name">
        </div>
        <div class="input_form">
            <input type="text" name="login" value="<? echo @$data['login'];?>" placeholder="Login">
        </div>
        <div class="input_form">
            <input type="password" name="password"  value="<? echo @$data['password'];?>" placeholder="Password">
        </div>
        <div class="input_form">
            <input type="password" name="rpassword" placeholder="Repeat the password">
        </div>
        <div class="input_form">
            <input type="submit" name="enter" value="Зарегистрироваться">
        </div>
        <a href="../authorization/index.php" target="_blank" class="input_form" style="color: #fff; text-decoration: none;">Авторизация</a>
    </form>
</body>
</html>