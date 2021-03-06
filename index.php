<?php
/*
Задание #1
Создайте   переменную   $name   и   присвойте   ей   строковое   значение   содержащее  Ваше имя
Создайте   переменную   $age   и   присвойте   ей   строковое   значение   содержащее   Ваш  возраст
Выведите   с   помощью   echo   (или   print)   фразу   “Меня   зовут:   ​ваше_имя​”   например:  “Меня зовут: Игорь”
Выведите фразу “Мне ​ваш_возраст​ лет”, например: “Мне 99 лет”
Выведите следующий набор символов, включая кавычки -
“!|\/’”\ (двойная кавычка, воскл. знак, вертикальная черта, обратный слэш,
слэш, кавычка, двойная кавычка, обратный слэш)
Каждая фраза должна начинаться с новой строки
 */

echo '<h2>Задание #1</h2>';

$name = 'Сергей';
$age = '36';

echo "Меня зовут $name <br>";
echo "Мне $age лет <br>";
echo '" ! | \\ / \' " \\';

echo '<br>';

/*
Задание #2

Дана задача: На школьной выставке 80 рисунков.
23 из них выполнены фломастерами, 40 карандашами, а остальные — красками.
Сколько рисунков, выполненные красками, на школьной выставке?
Описать и вывести условия, решение этой задачи на PHP. Все числа должны быть указаны в переменных.
*/

$total = 80;
$felt = 23;
$pencil = 40;

echo '<h2>Задание #2</h2>';

echo "Дана задача: На школьной выставке $total рисунков.
$felt из них выполнены фломастерами, $pencil карандашами, а остальные — красками.
Сколько рисунков, выполненные красками, на школьной выставке?
Описать и вывести условия, решение этой задачи на PHP. Все числа должны быть указаны в переменных.";

echo '<br>';

$paints = $total - $felt - $pencil;

echo 'Решение: ';
echo "Число рисунков красками = $paints ($total - $felt - $pencil)";

/*
Задание #3
Создайте константу и присвойте ей значение.
Проверьте, существует ли константа, которую Вы хотите использовать
Выведите значение созданной константы
Попытайтесь изменить значение созданной константы.
*/

echo '<h2>Задание #3</h2>';

define('MY_CONST', 777);

if (defined('MY_CONST')) {
    echo 'Константа MY_CONST существует';
}

echo '<br>';
echo 'MY_CONST = ' . MY_CONST;

define('MY_CONST', 888);
echo '<br>';
echo 'MY_CONST всё ещё = ' . MY_CONST;

/*
Задание #4

Создайте переменную $age
Присвойте переменной $age произвольное числовое значение

Напишите   конструкцию   if,   которая   выводит   фразу:   “Вам   еще работать   и   работать”
при   условии   что   значение   переменной   $age   попадает   в   диапазон   чисел
от   18   до   65  (включительно)

Расширьте   конструкцию   if,   выводя   фразу:   “Вам   пора   на   пенсию”
при   условии,   что  значение переменной $age больше 65

Расширьте   конструкцию   ­elseif,   выводя   фразу:   “Вам   ещё   рано   работать”
при  условии,   что   значение   переменной   $age   попадает   в   диапазон   чисел
от   1   до   17  (включительно)

Дополните   конструкцию   if­elseif,   выводя   фразу:   “Неизвестный   возраст”
при  условии,   что   значение   переменной   $age   не   попадет   в   вышеописанные   диапазоны чисел
*/

echo '<h2>Задание #4</h2>';

$age = 15;

if ($age >= 18 && $age <= 65) {
    echo 'Вам еще работать и работать';
} elseif ($age > 65) {
    echo 'Вам пора на пенсию';
} elseif ($age >= 1 && $age <= 17) {
    echo 'Вам ещё рано работать';
} else {
    echo 'Неизвестный возраст';
}

/*
Задание #5

Создайте переменную $day и присвойте ей произвольное числовое значение
С   помощью   конструкции   switch   выведите   фразу   “Это   рабочий   день”,
если   значение  переменной $day попадает в диапазон чисел от 1 до 5 (включительно)
Выведите   фраху   “Это   выходной   день”,
если   значение   переменной   $day   равно  числам 6 или 7
Выведите   фразу   “Неизвестный   день”,
если   значение   переменной   $day   не   попадает  в диапазон чисел от 1 до 7 (включительно)
*/

echo '<h2>Задание #5</h2>';

$day = 6;

switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'Это рабочий день';
        break;
    case 6:
    case 7:
        echo 'Это выходной день';
        break;
    default:
        echo 'Неизвестный   день';
}

/*
Задание #6
Создайте массив $bmw с ячейками:
model
speed
doors
year
 Заполните ячейки значениями соответсвенно: “X5”, 120, 5, “2015”
Создайте   массивы   $toyota   и   $opel   аналогичные   массиву   $bmw   (заполните  данными)
Объедините три массива в один многомерный массив
Выведите значения всех трех массивов в виде:
CAR name
name ­ model ­speed ­ doors ­ year
Например:
CAR bmw
X5 ­120 ­ 5 ­ 2015
Создайте массив $bmw с ячейками:
model
speed
doors
year
 Заполните ячейки значениями соответсвенно: “X5”, 120, 5, “2015”
Создайте   массивы   $toyota   и   $opel   аналогичные   массиву   $bmw   (заполните  данными)
Объедините три массива в один многомерный массив
Выведите значения всех трех массивов в виде:
CAR name
name ­ model ­speed ­ doors ­ year
Например:
CAR bmw
X5 ­120 ­ 5 ­ 2015
*/

echo '<h2>Задание #6</h2>';

$bmw = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => 2015
];

$toyota = [
    'model' => 'Camry',
    'speed' => 140,
    'doors' => 4,
    'year' => 2017
];

$opel = [
    'model' => 'Astra',
    'speed' => 110,
    'doors' => 3,
    'year' => 2015
];

$cars = ['bmw' => $bmw, 'toyota' => $toyota, 'opel' => $opel];

foreach ($cars as $car_name => $car) {
    echo <<<EOT
    CAR $car_name 
    <br>
    {$car['model']} {$car['speed']} {$car['doors']} {$car['doors']} 
    <br>
    <br>
EOT;
}

/*
Задание #7
Используя цикл for, выведите таблицу умножения размером 10x10. Таблица должна быть выведена с помощью HTML тега <table>
Если значение индекса строки и столбца чётный, то результат вывести в круглых скобках.
Если значение индекса строки и столбца Нечётный, то результат вывести в квадратных скобках.
Во всех остальных случаях результат выводить просто числом.
*/

echo '<h2>Задание #7</h2>';

echo '<table border="1" cellpadding="4" style="border-collapse: collapse; text-align: center">';

for ($i  = 1; $i <= 10; $i++) {
    echo '<tr>';

    for ($j = 1; $j <= 10; $j++) {
        echo '<td>';

        $res = $i * $j;

        if ($i % 2 == 0 && $j % 2 == 0) {
            echo "($res)";
        } elseif ($i % 2 != 0 && $j % 2 != 0) {
            echo "[$res]";
        } else {
            echo $res;
        }
    }

    echo '</tr>';
}

echo '</table>';

/*
Задание #8
Создайте переменную $str, которой присвойте строковое значение,
содержащее отдельные слова разделенные пробелом. Выведите строку на экран.
Затем разбейте строку на массив с помощью функции explode. Выведите массив.
Затем используя циклы while или do-while (на ваше усмотрение) развернуть массив и
склеить в строку используя любой символ, кроме пробела. Вывести результат.
*/

echo '<h2>Задание #8</h2>';

$str = 'В траве сидел кузнечик';

echo $str;
echo '<br>';

$arr = explode(' ', $str);
print_r($arr);
echo '<br>';

$i = count($arr);
$res = '';

while ($i > 0) {
    $i--;
    $res .= $arr[$i];
    if ($i != 0) {
        $res .= '~~';
    }
}

echo $res;
