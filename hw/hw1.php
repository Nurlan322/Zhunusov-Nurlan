<?
    for($i = 5; $i <= 13; $i++)
    {
        echo "$i <br>";
    }

    echo "<br>";

    $num = 1000;
    while ($num > 50)
    {
        $num /= 2;
        $count++;
    }
    echo $count . '<br>' . $num;

    echo "<br>";

    for($i = 1000, $j = 1; $i > 50; $j++)
    {
        $i /= 2;
        echo $i . " - " . $j . "<br>";
    }

    echo "<br>";

    for ($i = 2, $j = 10 - $i, $g = 0; $g <= $j; $g++)
    {
        if ($g == $j)
            echo $g;
        else
            echo $g . ", ";
    }
?>