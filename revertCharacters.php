<?php

/**
 * Created by Sublime Text
 * User: Kamran
 * Date: 20/12/2020
 */

require_once 'functions.php';


class MyClass {
  
  /*
    * метод, который принимает строку и меняет порядок букв в каждом слове на обратный с сохранением регистра и пунктуации
  */
  public function revertCharacters($string)
  {
    
    
    // Нижний регистр
    $str = mb_strtolower($string); 
    
    // Разбиваем строку, сохраняя  пунктуацию
    $words =  preg_split('/(\?|\.|!|\s)/', $str,NULL,PREG_SPLIT_DELIM_CAPTURE);
  
    // Используем к каждому элементу с кодировкой
    $words = array_map('Functions::strrev_enc', $words);
    
    // Объединяем элементы массива в строку
    $result = implode('', $words);
    
   //  В PHP нет встроенной мультибайтовой функции, аналогичной функции ucfirst(), которая переводит первый символ строки в верхний регистр.
    if(!function_exists('Functions::mb_ucfirst'))
   {
    function mb_ucfirst($string, $enc = 'UTF-8')
    {
        return mb_strtoupper(mb_substr($string, 0, 1, $enc), $enc) .
            mb_substr($string, 1, mb_strlen($string, $enc), $enc);
    }
   }
   
   // вызываем функцию перевода в верхний регистр после знаков: "."" "?"" "!"
   $str = Functions::sentence_case($result);
   
   // Возвращаем значение
    return $str;

  }
  
}