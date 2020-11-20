<?php

class QueryItem
{
    private PDO $pdo;

    function __construct()
    {
        $config = (include __DIR__ . '/../config.php')['db'];
        // Подключение к БД
        $this->pdo = new PDO('mysql:host=' . $config['host'] . '; dbname=' . $config['dbname'],
            $config['user'],
            $config['password']);
    }

    // Получение списка записей
    public function getAllItems($table)
    {
        $sql = 'SELECT * FROM ' . $table;
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return($statement->fetchAll(PDO::FETCH_ASSOC));
    }

    // Создание новой записи
    public function addItem($data, $table)
    {
        $sql_columns = implode(',', array_keys($data));
        $placeholders = ':' . implode(', :', array_keys($data));
        $sql = 'INSERT INTO ' . $table . '(' . $sql_columns . ') VALUES ( ' . $placeholders . ')';
        $statement = $this->pdo->prepare($sql);
        $statement->execute($data);

    }

    // Получение определенной записи
    public function getOneItemById($id, $table)
    {
        $sql = 'SELECT * FROM ' . $table . ' WHERE id = :id';
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
        return($statement->fetch(PDO::FETCH_ASSOC));
    }

    // Изменение записи
    public function updateItem($data, $table)
    {
        $set = [];
        foreach ($data as $key => $value){
            if ($key == "id") continue;
            $set[] = "$key =:$key";
        }
        $fields = implode(", ", $set);
        $sql = 'UPDATE ' . $table . ' SET ' . $fields . ' WHERE id=:id';
        $statement = $this->pdo->prepare($sql);
        $statement->execute($data);
    }

    // Удаление записи
    public function deleteItem($id, $table)
    {
        $sql = 'DELETE' . ' FROM ' . $table . ' WHERE id=:id';
        $statement = $this->pdo->prepare($sql);
        $statement->execute([':id'=>$id]);

        header("Location: /");
    }

}


