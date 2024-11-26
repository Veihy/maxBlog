<?php

function tt($value){ // крассивый вывод массива
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}

function dbCheckError($query){ // функция для проверки на ошибки
    $errInfo = $query->errorInfo(); //создаем переменную для проверок на ошибки
    if ($errInfo[0] !== PDO::ERR_NONE) { // если индекс переменной не равен "успеху"
        throw new Exception($errInfo[2]); // исключение с описанием ошибки

    }
    return true;
}



require ('connect.php'); // подключаем файл с конфигом подключения к бд

//функция для вывода таблицы
function selectAll($pdo, $table, $params = []) {
    // Проверяем допустимость таблицы
    $allowedTables = ['users', 'posts', 'comments'];
    if (!in_array($table, $allowedTables)) {
        throw new Exception("Неверное имя таблицы");
    }

    // базовый запрос
    $sql = "SELECT * FROM $table";

    // добавляем условия, если переданы параметры
    if (!empty($params)) {
        $conditions = [];
        foreach ($params as $key => $value) {
            $conditions[] = "$key = :$key"; // Именованные параметры
        }
        $sql .= " WHERE " . implode(" AND ", $conditions);
    }

    // подготавливаем запрос
    $query = $pdo->prepare($sql);

    // Выполняем запрос с параметрами
    $query->execute($params);

    // проверяем ошибки
    dbCheckError($query);

    // возвращаем данные
    return $query->fetchAll();
}

//$params = [
//    'admin' =>  1,
//    'username' => 'dima'
//];

//функция для вывода одной строки таблицы
function selectOne($pdo, $table, $params = []) {
    // Проверяем допустимость таблицы
    $allowedTables = ['users', 'posts', 'comments'];
    if (!in_array($table, $allowedTables)) {
        throw new Exception("Неверное имя таблицы");
    }

    // базовый запрос
    $sql = "SELECT * FROM $table";

    // добавляем условия, если переданы параметры
    if (!empty($params)) {
        $conditions = [];
        foreach ($params as $key => $value) {
            $conditions[] = "$key = :$key"; // Именованные параметры
        }
        $sql .= " WHERE " . implode(" AND ", $conditions);
    }
//    $sql = $sql . " LIMIT 1";

    // подготавливаем запрос
    $query = $pdo->prepare($sql);

    // Выполняем запрос с параметрами
    $query->execute($params);

    // проверяем ошибки
    dbCheckError($query);

    // возвращаем данные
    return $query->fetch();
}

//$params = [
//    'admin' =>  1,
//    'username' => 'dima'
//];

//вывод на экран
//tt(selectAll($pdo, 'users', $params));
//tt(selectOne($pdo, 'users', $params));
