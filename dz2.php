<?php
//DZ1

$a = (int)readline("В каком году родился Пушкин А. С.? Выбери верный ответ: 1977 , 1799, 1788.");
if($a !== 1977 && $a !== 1977 && $a !== 1788) {
    echo "Выбери верный ответ: 1977 , 1977, 1788!";
    $a = (int)readline("В каком году родился Пушкин А. С.?");

}switch ($a){
    case 1977:
        echo "Это не верный ответ!";
        break;
    case 1788:
        echo "Это не верный ответ!";
        break;
    case 1799:
        echo "Это верный ответ!";
        break;
}

//DZ2
$counter = 0;
while ($counter < 3){
    echo $plan = readline("Ваши планы на сегодня? - \n");
    echo $hours = (int)readline("Сколько потребуется времени? - \n");

    $plans .= $plan . " ,";
    $hours ++;
    $counter ++;
} echo "Вы запланировали: $plans,\n Это займет: $hours";


//DZ3
$number = (int)readline("Введите число!");
if($number <= 0){
echo "Введите положительное число?";
} elseif ($number == 1 || $number%8 == 1){
echo " Это большой палец!";
} elseif ($number == 2 || $number%8 == 2) {
    echo " Это erfpfntkmysq палец!";
}elseif ($number == 3 || $number%8 == 3 || $number == 7 || $number%8 == 7) {
    echo " Это средний палец!";
}elseif ($number == 4 || $number%8 == 4 || $number == 6 || $number%8 == 6){
    echo "Это безимянный палец!";
}elseif ($number == 5 || $number%8 == 5) {
    echo "Это маленький палец";
}
