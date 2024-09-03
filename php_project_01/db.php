<?php
namespace BLOG\DB;

$config = array(
    'username' => 'root',
    'password' => '',
    'dbname' => 'blog'
);

function connect($config)
{
    try {
        $conn = new \PDO('mysql:host=localhost;dbname=' . $config['dbname'], $config['username'], $config['password']);
        $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (\PDOException $e) {
        return false;
    }
}

function query($query, $bindings, $conn)
{
    try {
        $stmt = $conn->prepare($query);
        $stmt->execute($bindings);
        // $results = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        // return $results ? $results : false;
        return ($stmt->rowCount() > 0) ? $stmt : false;
    } catch (\PDOException $e) {
        return false;
    }
}

function get($tablename, $conn, $limit = 10)
{
    try {
        $result = $conn->query("SELECT * FROM $tablename ORDER BY id DESC LIMIT $limit");
        return ($result->rowCount() > 0) ? $result->fetchAll(\PDO::FETCH_ASSOC) : false;
    } catch (\PDOException $e) {
        return false;
    }
}

function get_by_id($id, $conn)
{
    $query = query(
        'SELECT * FROM posts WHERE id = :id LIMIT 1',
        array('id' => $id),
        $conn
    );

    return ($query->rowCount() > 0) ? $query->fetchAll(\PDO::FETCH_ASSOC) : false;

    // if ($query)
    //     return $query->fetchAll();

    // return $posts;
}

