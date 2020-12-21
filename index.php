<?php
require_once 'PHPUnit/Framework.php';
require_once 'revertCharacters.php';

    
    $str = "Привет! Давно не виделись.";
        $string = MyClass::revertCharacters($str);
        echo "<br>Text</br>";
        echo "Привет! Давно не виделись.";
        echo "<br>";
        echo "<br>Reverse Text after the function revertCharacters </br>";
        echo $string;
        echo "<br>";
        echo "<br>Reverse the original text<br>";
        echo "Тевирп! Онвад ен ьсиледив";


