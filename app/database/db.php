<?php

require ('connect.php'); // подключаем файл с конфигом подключения к бд
require('dbCheck.php'); // подключаем файл с функцией для получения списка таблиц
require ('dbCheckError.php'); //подключаем файл с функцией, которая проверяет на ошибки вврда

function tt($value){ // крассивый вывод массива
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}





// Функция для вывода всех записей из таблицы
function selectAll($pdo, $table, $params = []) {
    global $tables;

    if (!in_array($table, $tables)) {
        throw new Exception("Неверное имя таблицы");
    }

    foreach ($params as $key => &$value) {
        $value = sanitizeInput($value);
        if ($value === false) {
            throw new Exception("Некорректное значение для параметра: $key");
        }
    }

    $sql = "SELECT * FROM $table";
    if (!empty($params)) {
        $conditions = [];
        foreach ($params as $key => $value) {
            $conditions[] = "$key = :$key";
        }
        $sql .= " WHERE " . implode(" AND ", $conditions);
    }

    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
    return $query->fetchAll();
}

// Функция для вывода одной записи из таблицы
function selectOne($pdo, $table, $params = []) {
    global $tables;

    if (!in_array($table, $tables)) {
        throw new Exception("Неверное имя таблицы");
    }

    foreach ($params as $key => &$value) {
        $value = sanitizeInput($value);
        if ($value === false) {
            throw new Exception("Некорректное значение для параметра: $key");
        }
    }

    $sql = "SELECT * FROM $table";
    if (!empty($params)) {
        $conditions = [];
        foreach ($params as $key => $value) {
            $conditions[] = "$key = :$key";
        }
        $sql .= " WHERE " . implode(" AND ", $conditions);
    }

    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);

    return $query->fetch();
}

//задаем параметры, если нужно
//$params = [
//    'email' => 'kate22@maxblog.com',
//    'admin' => '1'];

//выводим на экран
//tt(selectAll($pdo, 'users', $params));


// Функция для вставки данных в таблицу
function insert($pdo, $table, $params) {
    global $tables;

    if (!in_array($table, $tables)) {
        throw new Exception("Неверное имя таблицы");
    }

    foreach ($params as $key => &$value) {
        $value = sanitizeInput($value);
    }

    $columns = implode(", ", array_keys($params));
    $placeholders = ":" . implode(", :", array_keys($params));

    $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
//    return $pdo->lastInsertId();
}

//задаем параметры
//$arrData = [
//    'admin' => '0',
//    'username' => 'test1',
//    'email' => 'test1@maxblog.com',
//    'password' => '3211'
//];
////используем функцию записи
//insert($pdo, 'users', $arrData);



// Функция для обновления данных в таблице
function update($pdo, $table, $id, $params) {
    global $tables;

    if (!in_array($table, $tables)) {
        throw new Exception("Неверное имя таблицы");
    }

    if (!filter_var($id, FILTER_VALIDATE_INT)) {
        throw new Exception("ID должен быть числом");
    }

    foreach ($params as $key => &$value) {
        $value = sanitizeInput($value);
    }

    $setParts = [];
    foreach ($params as $key => $value) {
        $setParts[] = "$key = :$key";
    }
    $setString = implode(", ", $setParts);

    $sql = "UPDATE $table SET $setString WHERE id = :id";
    $params['id'] = $id;

    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
}

//задаем параметры
//$params = [
//    'username' => 'жижа новогодняя',
//    'password' => 'знатная красивая',
//    'email' => 'жижа@domain.com',
//    'admin' => '0'
//];
//используем функцию для изменения записей
//update($pdo, 'users', 34, $params);


// Функция для удаления записи из таблицы
function delete($pdo, $table, $id) {
    global $tables;

    if (!in_array($table, $tables)) {
        throw new Exception("Неверное имя таблицы");
    }

    if (!filter_var($id, FILTER_VALIDATE_INT)) {
        throw new Exception("ID должен быть числом");
    }

    $sql = "DELETE FROM $table WHERE id = :id";
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]);
    dbCheckError($query);
}


//используем функцию для удаления
//delete($pdo, 'users', 44);
