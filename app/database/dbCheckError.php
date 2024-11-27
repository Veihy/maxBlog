<?php
function dbCheckError($query){ // функция для проверки на ошибки
    $errInfo = $query->errorInfo(); //создаем переменную для проверок на ошибки
    if ($errInfo[0] !== PDO::ERR_NONE) { // если индекс переменной не равен "успеху"
        throw new Exception($errInfo[2]); // исключение с описанием ошибки
    }
    return true;
}