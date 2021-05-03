<?php
//dz 1
$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
$a = array_map(function (int $number) {
    if ($result = $number % 2) {
        return " четное число" ;
    }else{
        return "нечетное число";
    }
}, $arr);
var_dump($a);
$a = array_map(function (int $number) {
    $result = $number % 2 === 0;
        return $result ? " четное число" : "нечетное число";
}, $arr);
var_dump($a);

//dz-2
$arr2 = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$result = dz($arr2);

function dz($arr2) : array {
    $result = ['min' => 0, 'max' => 0, 'avg' => 0];
    $result['min'] = min($arr2);
    $result['max'] = max($arr2);
    $result['avg'] = array_sum($arr2)/count($arr2);

    return $result;
};
var_dump($result);

//dz3


$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
];

$a = findValue('книга', $box);
var_dump($a);
function findValue(string $a, array $box): bool
{
    foreach ($box as $value) {
        if (is_string($value) && $a === $value) {
            return true;}
        if (is_array($value)) {
               $a = findValue($a, $value);
             if($a) {return true;}
            }
        }
}


