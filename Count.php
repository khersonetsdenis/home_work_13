<?php
/*
Необходимо написать класс для подсчета и группировки слов в предложении.

Например: “Лето, наступило у нас лето”

Результат должен быть в виде массива:
[‘лето’] => 2,
[‘наступило’] => 1,
[‘у’] => 1,
[‘нас’] => 1
*/
class Count
{
    public $array = [];

    public function count_world ($array_string) {
        $new_array = explode(' ', $array_string);
        foreach ($new_array as $value)
        {
            @$this->array[$value]++;
        }
        return $this->array;
    }

    public function count_world_lite($array_string){
        $new_array = explode(' ', $array_string);
        return array_count_values ($new_array);
    }
}

$count = new Count();
$count->count_world('лето солнце море пляж лето');
$count->count_world_lite('лето солнце море пляж лето');