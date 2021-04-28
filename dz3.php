<?php
//dz1
for ($i = 1; $i <= 10; $i++) {
    $arr1[] = mt_rand(1, 100);
}
for ($i = 1; $i <= 10; $i++) {
    $arr2[] = mt_rand(1, 100);
}
$total = [];
for ($i = 0; $i < count($arr1); $i++) {
    $total[] = $arr1[$i] * $arr2[$i];
}

print_r($total);
$a = [1,2,3,4,5,6,7,8,9,10];
$b = [10,9,8,7,6,5,4,3,2,1];
$c = [];
foreach ($a as $key => $value) {
    $c[$key] = $value * $b[$key];
}
print_r($c);

//dz2

$name = readline("Назовите Ваше имя!\n");
$wishs = [счастья,здоровья,света, улыбок, веселья];
$epithets = [большого, крепкого, яркого, весеннего, солнечного];

foreach ($wishs as $key => $wish){
    if ($key < 3) {
        $total[] = $epithets[array_rand($epithets)] . " " . $wishs[array_rand($wishs)];
    }
}
//var_dump($total);
$str = implode(', ', $total);
echo "Дорогой $name! Поздравляем с Днем рождения! Желаем Вам $str!";


//dz 3;


$students = [
    'AT20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 3,
        'Смирнова Христина Потаповна' => 3,
        'Рогозин Даниил Арсениевич' => 4,
        'Золин Владилен Леонтиевич' => 2,
        'Архаткина Владислава Никитевна' => 4,
        'Мещерякова Мария Елизаровна' => 5,
        'Саврасова Фаина Ивановна' => 4,
        'Хромченко Зинаида Николаевна' => 4,
        'Протасова Майя Леонидовна' => 2,


    ],
    'AT21' => [
        'Антонов Антон' => 4,
        'Ябров Тимур Чеславович' => 3,
        'Белорусов Ефрем Изяславович' => 2,
        'Ягода Назар Прохорович' => 5,
        'Ярилова Розалия Серафимовна' => 2,
        'Нырко Платон Вадимович' => 4,
        'Калинин Агап Моисеевич' => 2,
        'Никифоров Юлиан Прокофиевич' => 3

    ]
];
foreach ($students['AT20'] as $key => $value) {
    $students_AT20[] = $key;
    $value_AT20[] = $value;
    $sr_AT20 = array_sum($value_AT20)/count($value_AT20);
    }
foreach ($students['AT21'] as $key => $value) {
    $students_AT21[] = $key;
    $value_AT21[] = $value;
    $sr_AT21 = array_sum($value_AT21)/count($value_AT21);
}

var_dump($sr_AT20, $sr_AT21);
if ($sr_AT20 > $sr_AT21) {
    echo "группа АТ20 лучшая\n";
}else {
    echo "группа АТ21 лучшая\n";
}

foreach ($students as $student) {
    foreach ($student as $key => $value) {
        if ($value < 3){
            $badstudent[] = $key;
            $abc = implode(', ', $badstudent);
            unset($student[$key]);//здесь ошибка

        }
    }
}
echo "Студенты к отчислению: $abc";
print_r($students);

