<?php
    session_start();
//    session_destroy();
    echo "hello, " . $_COOKIE['name'] . '<br>';
    echo '<a href="fact.php">Fact</a> ';
    echo '<a href="bitrix.php">Bitrix</a> <br>';
switch ($_SERVER['HTTP_REFERER']) {
    case 'http://localhost:63342/index.php/authorization/fact.php':
        $_SESSION['link'] = 'Fact';
        break;
    case 'http://localhost:63342/index.php/authorization/bitrix.php':
        $_SESSION['link'] = 'Bitrix';
        break;
    default:
        break;
}
    if($_SESSION['link'] == 'Fact' || $_SESSION['link'] = 'Bitrix')
        echo 'Последний раз вы были на' . ' ' . $_SESSION['link'] . '<br>';
    else
        echo 'Перейдите по ссылке';

    if(isset($_GET['colorButton']))
    {
        switch ($_GET['bgColor'])
        {
            case 'orange':
                setcookie('color', '#ffa500', time() + 600);
                break;
            case 'green':
                setcookie('color', '#008000', time() + 600);
                break;
            case 'gray':
                setcookie('color', '#808080', time() + 600);
                break;
            case 'darkgray':
                setcookie('color', '#302d2e', time() + 600);
                break;
            default:
                break;
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        body {
            background: <? echo $_COOKIE['color']; ?>;
        }
    </style>
</head>
<body>
<form>
    <label for="bgSelect">Выбрать цвет фона</label>
    <select name="bgColor" id="bgSelect">
        <option></option>
        <option value="orange">Оранжевый</option>
        <option value="green">Зеленый</option>
        <option value="gray">Серый</option>
        <option value="darkgray">Темно серый</option>
    </select>
    <input type="submit" name="colorButton" value="Выбрать">
</form>
</body>
</html>
