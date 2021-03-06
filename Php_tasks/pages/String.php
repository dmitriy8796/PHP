<!DOCTYPE html>
<html>
<head>
    <title>Library</title>
    <link rel="stylesheet" href="..\css\main.css">
</head>
<body>
    <?php require_once '../option/nav.php'; ?>
    <?php require_once '../include/functions.php'; ?>
    <h1>Строки</h1>








    <h2>Задания 1 </h2>
    <ol>
        <li class="li_task">
            Дана переменная $password. Выведите сообщение о том, что пароль задан верно или соответствующее сообщение
            об ошибке, если в ней меньше 5 символов или присутствуют символы
        </li>
        <li class="li_task">
            Удалить в строке все лишние пробелы – из несколько подряд идущих оставить один.
        </li>
        <li class="li_task">
            Дана строка, содержащая полное имя файла (например, D:\Webservers\home\test\www\myfile.txt).
            Выделите из этой строки имя файла без расширения
        </li>
        <li class="li_task">Дана переменная $str. Замените смайлики &#9786; &#9785; в этой строке на соответствующие картинки.</li>
        <li class="li_task">
            Дана строка «C Днем Рождения», запишите каждое слово этой строки в отдельный элемент
            массива и выведите его на экран.
        </li>
        <li class="li_task">Дана строка «html, &ltb&gtphp&lt/b&gt, js». Выведите ее на экран «как есть».</li>
        <li class="li_task">
            Запишите в переменную $pass случайную строку cлучайной длины $len, состоящую из маленьких букв латинского алфавита.
            Зашифруйте пароль по алгоритму md5. Проверьте совпадение хеш-кода.
        </li>
    </ol>
    <h2>Решения</h2>
    <h3>1. Пусть имеется массив ['fst', 'snd', 'thd', 'fth']. Выведите случайный элемент массива.</h3>
    <pre>
        $mass = ['fst', 'snd', 'thd', 'fth'];
        echo $mass[rand(0,1)];
        <?php
            $mass = ['fst', 'snd', 'thd', 'fth'];
            echo $mass[rand(0,1)];
            unset($mass);
        ?>
    </pre>
    <h3>2. Пусть имеется массив ['fst' => 1, 'snd' => 2, 'thd' => 2, 'fth' => 4].
        Получите на основании его новый массив с ключами его элементов ['fst', 'snd', 'thd', 'fth'].</h3>
    <pre>
        $mass = ['fst' => 1, 'snd' => 2, 'thd' => 2, 'fth' => 4];
        $mass2 = [];
        foreach($mass as $key => $value){
            $mass2[] = $key;
        }
        print_r($mass2);
        <?php
            $mass = ['fst' => 1, 'snd' => 2, 'thd' => 2, 'fth' => 4];
            $mass2 = [];
            foreach($mass as $key => $value){
                $mass2[] = $key;
            }
            print_r($mass2);
            unset($mass, $mass2);
        ?>
    </pre>
    <h3>3. Пусть имеется массив ['fst', 'snd', 'thd', 'fth', 'snd', 'thd'].
        Получите на основании его новый массив, содержащий только уникальные элементы ['fst', 'snd', 'thd', 'fth'].</h3>
        <pre>
            unset($mass);
            $mass = ['fst', 'snd', 'thd', 'fth', 'snd','snd','snd','snd','snd','snd', 'thd', 'thd', 'thd', 'thd', 'thd', 'thd'];
            $count = 0;
            for ($i = 0; $i < count($mass); $i++){
               $count = 0;
               for($j = $i + 1; $j < count($mass); $j++){
                   if($mass[$i] == $mass[$j]){
                      $count++;
                   }
               }
               if($count < 1)
               $mass2[] = $mass[$i];
            }
            print_r($mass2);
        <?php
        unset($mass);
            $mass = ['fst', 'snd', 'thd', 'fth', 'snd','snd','snd','snd','snd','snd', 'thd', 'thd', 'thd', 'thd', 'thd', 'thd'];
            $count = 0;
            for ($i = 0; $i < count($mass); $i++){
               $count = 0;
               for($j = $i + 1; $j < count($mass); $j++){
                   if($mass[$i] == $mass[$j]){
                      $count++;
                   }
               }
               if($count < 1)
               $mass2[] = $mass[$i];
            }
            print_r($mass2);
        ?>
        </pre>

    <h3>4. Решите задачу обмена значений двух целочисленных переменных, не
        прибегая к конструкции list() и использованию третьей промежуточной переменной.</h3>
    <pre>
        $a = 1;
        $b = 2;
        echo "a=$a b=$b &ltbr /&gt";

        $a = $a + $b;
        $b = $a - $b;
        $a = $a - $b;

        echo "a=$a b=$b &ltbr /&gt";
    </pre>
        <?php
            $a = 1;
            $b = 2;
            echo "a=$a b=$b <br />";
            $a = $a + $b;
            $b = $a - $b;
            $a = $a - $b;

            echo "a=$a b=$b <br />";
        ?>

    <h3>5. Создайте массив со случайным количеством элементов от 5 до 10, элементы
        которого принимают значени от 0 до 100. Отсортируйте элементы в порядке от наименьшего к наибольшему.</h3>

    <pre>
        unset($mass);
        for($i = 5; $i < 10; $i++){
            $mass[] = rand(5, 10);
        }
        print_r($mass);
        for($i = 0; $i < count($mass); $i++){
            for($j = 0; $j < count($mass); $j++){
                if($mass[$i] < $mass[$j]){
                    $dop = $mass[$j];
                    $mass[$j] = $mass[$i];
                    $mass[$i] = $dop;
                }
            }
        }
        echo '&ltbr /&gt';
        print_r($mass);
    </pre>
    <?php
        unset($mass);
        for($i = 5; $i < 10; $i++){
            $mass[] = rand(5, 10);
        }
        print_r($mass);
        // Вариант через велосипед под название сортировка пузырьком
//        for($i = 0; $i < count($mass); $i++){
//            for($j = 0; $j < count($mass); $j++){
//                if($mass[$i] < $mass[$j]){
//                    $dop = $mass[$j];
//                    $mass[$j] = $mass[$i];
//                    $mass[$i] = $dop;
//                }
//            }
//        }
    // Вариант через велосипед под название сортировка пузырьком, без использования доп. переменной
        for($i = 0; $i < count($mass); $i++){
            for($j = 0; $j < count($mass); $j++){
                if($mass[$i] < $mass[$j]){
                   $mass[$i] = $mass[$i] + $mass[$j];
                   $mass[$j] = $mass[$i] - $mass[$j];
                   $mass[$i] = $mass[$i] - $mass[$j];
                }
            }
        }
        echo '<br />';
        print_r($mass);

    ?>

    <h3>6. Создайте текстовый файл с названием месяцев. В документации php
        найдите функцию file(). Создайте массив с названием месяцев из содержимого текстового файла.</h3>
    <pre>
        unset($mass);
        $mass = file('../files/month.txt');

        $str = implode($mass);
        echo '$str = ' . $str . '&ltbr /&gt';
        $month = explode(',', $str, 12);
        print_r($month);
    </pre>
    <?php
    unset($mass);
        $mass = file('../files/month.txt');
        $str = implode($mass);
        echo '$str = ' . $str . '<br />';
        $month = explode(',', $str, 12);
        print_r($month);
    ?>
</body>
</html>
