<?php
spl_autoload_register(function($class) {
    $classFileName = 'vendor' . DIRECTORY_SEPARATOR . $class . '.php';
    if (file_exists($classFileName)) {
        include_once $classFileName;
        return true;
    }
    return false;
});
//$testObj=new Test();
//$testObj->name='Vasya';
//var_dump($testObj);
//echo($testObj->name);
//===============================================================================


//$human = new Human('вася', 'пупкин', '22', 'днепр, троицкий , 21г');
//echo $human;

$sudent=new Student('Коля', 'Тросточкин', 33, 'Киев, Банковска, 44','php18-el','ealk@ljkfa.com');
echo $sudent;