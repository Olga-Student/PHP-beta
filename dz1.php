<?php
// 2 задание
$someName = readline("Добрый день! Введите Ваше имя\n");

$someAge = readline("Введите свой возраст !\n");
echo "Приятно познакомиться, Вас зовут $someName! Вам $someAge лет.\n";

//2 задание
$someName = readline("Добрый день! Введите Ваше имя\n");
$somePlans1 = readline("Что первое Вы запланировали на сегоднешний день?\n");
$someTimes1 = readline("Сколько времений у Вас займет это?\n");
$somePlans2 = readline("Что второе Вы запланировали на сегоднешний день?\n");
$someTimes2 = readline("Сколько времений у Вас займет это?\n");
$somePlans3 = readline("Что третье Вы запланировали на сегоднешний день?\n");
$someTimes3 = readline("Сколько времений у Вас займет это?\n");

echo "$someName! сегодня у Вас запланировано 3 дела:\n
  - $somePlans1 ($someTimes1)\n
  - $somePlans2 ($someTimes2)\n
  - $somePlans3 ($someTimes3)\n ";