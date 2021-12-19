<h1> Задание 4 | Строки </h1>
        <?php
        $str = "Hello";
        echo "VAR: $str" . '!';
        echo "<input type=\"text\"><br>";
        $length = strlen($str);
        echo strtoupper(trim(" some "));
        echo $length;
        echo md5("qwerty");
        ?>
        <hr>
        <?php
        echo "\"";
        echo " ' ";
        echo "\\";
        echo "\n";
        echo "<div>Просто блок</div>";
        echo '<hr>';
        echo "\"" . " ' " . "\\" . "\n" . "<div>Просто блок</div>";
        ?>
        <hr>
        <?php
        $string = "ASDПросто текстASD";
        // Первое задание
        $newStr = substr($string, 0, strlen($string) - 3); // Обрезаем все символы, кроме 3 последних
        echo "Обрезанная строка - $newStr";
        // Второе задание
        $lowerCase = substr($newStr, 0, 3);
        // Обрезанную часть в нижний регистр + добавляем прежнюю строку, но без первых трех элементов
        $result = strtolower($lowerCase);
        $result .= substr($newStr, 3, strlen($newStr));
        echo "Нижний регистр - $result";
        // Третье задание
        echo "Первые три символа - " . substr($result, 0, 3);
        ?>
        <hr>
    </div>
    <div>