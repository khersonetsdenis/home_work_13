<?php

/*
 * Создайте класс и реализуйте метод который будет делать плоский массив из ассоциативного
    Пример: [1,[2,3,null,4],[null],5]
    Результат: [1,2,3,4,5]
 */
class ExpandArray
{
    public $numbers = [];

    public function expand_arr($arr)
	{

        foreach ($arr as $arr_value) {
            if(is_array($arr_value)){
            foreach ($arr_value as $value) {
                $this->numbers[] = $value;
            }
            } else $this->numbers[] = $arr_value;
        }

        return $this->numbers = array_diff($this->numbers, array('', NULL, FALSE));
    }


}

$expandarray = new ExpandArray();
var_dump($expandarray->expand_arr([1,[2,3,null,4],[null],5]));

