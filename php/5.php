<h1>Задание 5 | Условные операторы</h1>
        <?php
        $a = 23;
        if ($a == 5)
            echo "10";
        else if ($a == 10)
            echo "15";
        else if ($a == 30)
            echo "20";
        else
            echo "Что-то не то!";
        ?>
        <hr>
        <?php
        $x = 15;
        $y = 5.6;
        echo $x == 15;
        echo $y >= 6;
        echo $x == $y;
        ?>
        <hr>
        <?php
        $a = 34;
        echo ($a < 50 && $a != 37 && $a >= 32) || ($a == 0 || $a == 15);
        ?>
        <hr>
        <?php
        $x = 7;
        $y = "7";
        $res = $x === $y;
        echo "$x === $y = $res";
        ?>
        <hr>

        <?php
        $a = 2;
        $b = 5;
        if ($a % 2 == 0)
            echo $b . ' - нечетное число';
        else
            echo $a . ' - нечетное число';
        ?>
        <hr>
        <?php
        $a = 5;
        $b = -3;
        $res = $b != 0 ? ($a / $b) : 1;
        echo "Результат: $res";
        ?>
        <hr>
    </div>
</body>

</html>