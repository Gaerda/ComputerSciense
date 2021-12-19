        <h1> Задание 3 | Математика </h1>

        <?php
        $x = 10;
        $y = 20;
        echo $x + $y . '<br>';
        echo $x - $y . '<br>';
        echo $x * $y . '<br>';
        echo $x / $y . '<br>';
        echo $x % $y . '<br>';
        $x += 10; // $x = $x + 10;
        $y -= 10; // $y = $y - 10;
        echo $x . '<br>';
        echo $y . '<br>';
        $x++; // $x += 1;
        $x--; // $x -= 1;
        echo M_PI . '<br>';
        echo M_E . '<br>';
        echo abs(-22) . '<br>';
        echo round(3.5556734, 2) . '<br>';
        $rand = mt_rand(1, 20);
        $rand++;
        echo $rand . '<br>';
        echo max(2, 5, 6, 1, 8, 3, 6) . '<br>';
        ?>
        <hr>
        <?php
        $first = 5.6;
        $second = 8.9;
        $summ = $first + $second;
        $diff = $first - $second;
        $mult = $first * $second;
        $divide = $first / $second;
        $ostatok = $first % $second;
        echo "Сумма: $summ";
        echo "Разница: $diff";
        echo "Умножение: $mult";
        echo "Деление: $divide";
        echo "Остаток: $ostatok";
        ?>
        <hr>
        <?php
        $a = -2;
        $a *= 3;
        $a++;
        echo "Результат: $a";
        ?>
        <hr>
        <?php
        echo "Максимум - " . max(9, 23, 0, -24.5, 34, 11, 41, 3, -3.2, 3);
        ?>
        <hr>
        <?php
        echo floor(sqrt(2));
        ?>
        <hr>
    </div>