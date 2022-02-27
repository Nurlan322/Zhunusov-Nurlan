<?php
    $logins = ['gena', 'ivan'];
    $passwords = ['passgena', 'passivan'];

    for($i = 0;$i < count($passwords); $i++)
    {
        $passwords[$i] = md5($passwords[$i]);
    }
    $data = $_POST;

    if(isset($data['enter']))
    {
        $errors = [];
        if(trim($data['login']) == '')
            $errors[] = 'Введите логин!';
        if(trim($data['password']) == '')
            $errors[] = 'Введите пароль!';
        if(empty($errors)){
            for($i = 0; $i < count($logins); $i++)
            {
                if(trim($data['login']) == $logins[$i] && md5($data['password']) == $passwords[$i])
                {
                    $new_url = 'hello.php';
                    setcookie('name', strtoupper($logins[$i]), time() + 600);
                    header('Location: ' . $new_url);
                    exit();
                }
                else
                {
                    continue;
                }
            }
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
    </form>
</body>
</html>