<?
if (date('H') + 2 >= 20 || date('H') + 2 < 8) {
    $bg = 'linear-gradient(50deg, #00853e, #000000)';
    $hf = 'linear-gradient(50deg, #000000, #00853e)';
} else if (date('H') + 2 >= 8 && date('H') + 2 < 20) {
    $bg = "linear-gradient(50deg, #00853e, #D3D3D3)";
    $hf = 'linear-gradient(50deg, #D3D3D3, #00853e)';
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
        body {
            background: <? echo $bg; ?>;
        }

        .item-1, .item-3 {
            background: <? echo $hf; ?>;
        }
    </style>
</head>
<body>
<div class="flex-container">
    <?
    require_once "includes/header.php";
    ?>
    <main class="flex-item item-2">
        <img src="img/photo.jpg" class="inner-item inner-item-1">
        <div class="inner-item inner-item-2">
            <div class="name-content name">
                <? $all_text[] = "Жунусов Нурлан";
                echo $all_text[0];
                ?></div>
            <div class="name-content content">
                <span class="main-text about-me">
                    <?
                    $about_me = 'Мне 20 лет,<br> учусь на 2 курсе в МГТУ им.Г.И.Носова<br> по специальности прикладная информитика. В свободное время играю на гитаре, смотрю фильмы, сериалы. Играю в компьютерные игры.';
                    $about_me_color = mb_substr($about_me, 0, 11);
                    echo "<font color = red>$about_me_color</font>" . mb_substr($about_me, 11);
                    $all_text[] = "Мне 20 лет, учусь на 2 курсе в МГТУ им. Г.И.Носова по специальности прикладная информитика. В свободное время играю на гитаре, смотрю фильмы, сериалы. Играю в компьютерные игры.";
                    ?>
                </span>
                <span class="main-text feedback">
                    <?
                    $feedback = 'Преподователь готов ответить на каждый вопрос своих учеников.<br> Доходчиво и внятно объясняет изучаемый материал. Также хочу выделить приятную атмосферу на занятиях.';
                    $array_feedback = explode(' ', $feedback);
                    for ($i = 0; $i < count($array_feedback); $i++) {
                        if ($i % 2 == 0) {
                            echo "<font color = purple>$array_feedback[$i] </font>";
                        } else
                            echo "<font color = orange>$array_feedback[$i] </font>";
                    }
                    $all_text[] = "Преподователь готов ответить на каждый вопрос своих учеников. Доходчиво и внятно объясняет изучаемый материал. Также хочу выделить приятную атмосферу на занятиях.";
                    ?>
                </span>
            </div>
        </div>
    </main>
    <div class="flex-piсt">
        <div class="pict-item">
            <img src="img/winter.jpg" alt="Ops...">
            <div class="text"><? $all_text[] = "Зима";
                echo $all_text[3]; ?></div>
        </div>
        <div class="pict-item">
            <img src="img/spring.jpg" alt="Ops...">
            <div class="text"><? $all_text[] = "Весна";
                echo $all_text[4]; ?></div>
        </div>
        <a href="https://ru.wikipedia.org/wiki/%D0%9B%D0%B5%D1%82%D0%BE,_%D0%94%D0%B6%D0%B0%D1%80%D0%B5%D0%B4"
           target="_blank" class="pict-item">
            <img src="img/leto.jpg" alt="Ops...">
            <div class="text"><? $all_text[] = "Лето";
                echo $all_text[5]; ?></div>
        </a>
        <div class="pict-item">
            <img src="img/autmn.jpg" alt="Ops...">
            <div class="text"><? $all_text[] = "Осень";
                echo $all_text[6]; ?></div>
        </div>
    </div>
    <div class="flex-piсt">
        <div class="pict-item">
            <div class="text">Мой день рождения:</div>
            <div class="text"><? echo '22.04.2001'; ?></div>
        </div>
        <div class="pict-item">
            <div class="text">Сегодня:</div>
            <div class="text"><? echo date("d.m.y") ?></div>
        </div>
        <div class="pict-item">
            <?
            $days = (strtotime(date("d.m.y")) - strtotime("22.04.2001")) / (60 * 60 * 24);
            ?>
            <div class="text">На данный момент прошло: <? echo floor($days); ?></div>
        </div>
    </div>
    <?
    // Количество гласных
    $all_text[] = "Как со мной связаться";
    $ar = ['а', 'е', 'ё', 'и', 'о', 'у', 'ы', 'э', 'ю', 'я'];
    $Ar = ['А', 'Е', 'Ё', 'И', 'О', 'У', 'Ы', 'Э', 'Ю', 'Я'];
    for ($i = 0; $i < count($all_text); $i++) {
        for ($j = 0; $j < strlen($all_text[$i]) / 2 + 1; $j++) {
            if (in_array(mb_substr($all_text[$i], $j, 1), $ar)) {
                $count++;
            } elseif (in_array(mb_substr($all_text[$i], $j, 1), $Ar)) {
                $count++;
            } else
                continue;
        }
    }
    // Количество слов
    for ($i = 0; $i < count($all_text); $i++) {
        $word_count += count(explode(' ', $all_text[$i]));
    }
    require_once "includes/footer.php";
    ?>
</div>
</body>
</html>