<?php

/*
 * Создайте класс и реализуйте в нем статический метод accumulate(array $numbers). Метод должен к каждому элементу массива применить функцию:
                x = x * x

    Пример: дано массив [1, 2, 3, 4, 5]
    Результат должен быть в виде массива: [1, 4, 9, 16, 25]

 */


class Multiply
{

    public static function accumulate (array $numbers)
	{
     $new_numbers = array_map(function ($item) {
          return $item * $item;
      }, $numbers);
        return $new_numbers;
  }
}



Multiply::accumulate([1, 2, 3, 4, 5]);