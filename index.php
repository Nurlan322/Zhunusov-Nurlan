<?
    if(date('H') + 2 >= 20 || date('H') + 2 < 8){
        $bg = 'linear-gradient(50deg, #00853e, #000000)';
    }
    else if (date('H') + 2 >= 8 && date('H') + 2 < 20)
    {
        $bg = "linear-gradient(50deg, #00853e, #D3D3D3)";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Сайт про меня</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="img/tor.png" type="image/png">
    <style type="text/css">
        body{
            background: <? echo $bg; ?>;
        }
    </style>
</head>
<body>
<div class="flex-container">
    <header class="flex-item item-1">
        <img src="img/tor.png" class="logo">
        <a href="table/table.html" target="_blank">
            <img src="img/tab.jpg" width="200px" height="100px" alt="Ops..." class="table">
        </a>
    </header>
    <main class="flex-item item-2">
        <img src="img/photo.jpg" class="inner-item inner-item-1">
        <div class="inner-item inner-item-2">
            <div class="name-content name">Жунусов Нурлан</div>
            <div class="name-content content">
                <span class="main-text about-me">Мне 20 лет,<br> учусь на 2 курсе в МГТУ им.Г.И.Носова<br> по специальности прикладная информитика. В свободное время играю на гитаре, смотрю фильмы, сериалы. Играю в компьютерные игры.
                </span>
                <span class="main-text feedback">Преподователь готов ответить на каждый вопрос своих учеников.<br> Доходчиво и внятно объясняет изучаемый материал. Также хочу выделить приятную атмосферу на занятиях.</span>
            </div>
        </div>
    </main>
    <div class="flex-piсt">
        <div class="pict-item">
            <img src="img/winter.jpg" alt="Ops...">
            <div class="text">Зима</div>
        </div>
        <div class="pict-item">
            <img src="img/spring.jpg" alt="Ops...">
            <div class="text">Весна</div>
        </div>
        <a href="https://ru.wikipedia.org/wiki/%D0%9B%D0%B5%D1%82%D0%BE,_%D0%94%D0%B6%D0%B0%D1%80%D0%B5%D0%B4" target="_blank" class="pict-item" >
                <img src="img/leto.jpg" alt="Ops...">
                <div class="text">Лето</div>
        </a>
        <div class="pict-item">
            <img src="img/autmn.jpg" alt="Ops...">
            <div class="text">Осень</div>
        </div>
    </div>
</div>
</body>
</html>