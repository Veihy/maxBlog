<?php

//функция для получения списка таблиц

function getAllowedTables($pdo, $databaseName) {
    // SQL-запрос для получения списка таблиц из information_schema
    $sql = "SELECT TABLE_NAME FROM information_schema.tables WHERE TABLE_SCHEMA = :databaseName";

    // Подготавливаем и выполняем запрос
    $query = $pdo->prepare($sql);
    $query->execute(['databaseName' => $databaseName]);

    // Получаем список таблиц в виде одномерного массива
    $tables = $query->fetchAll(PDO::FETCH_COLUMN);

    // Проверка на ошибки
    if (!$tables) {
        throw new Exception("Не удалось получить список таблиц");
    }

    return $tables;
}

// Получаем список таблиц
$tables = getAllowedTables($pdo, 'maxBlog');

// Универсальная функция фильтрации данных
function sanitizeInput($data) {
    if (is_int($data)) {
        return filter_var($data, FILTER_VALIDATE_INT);
    }
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}