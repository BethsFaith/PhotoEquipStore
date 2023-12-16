<?php

class DBConnection
{
    public function __construct($connectionString, $user, $password)
    {
        try {
            $this->connection = new PDO($connectionString, $user, $password);

            // установка режима вывода ошибок
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            /*echo "Database connection established";*/
        }
        catch (PDOException $e)
        {
            $this->connection = null;
            /*echo "Connection failed: " . $e->getMessage();*/
        }
    }
    public function __destruct()
    {
        $this->connection = null;
    }
    /**
     * @return PDO
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * @return bool
     */
    public function isOpen()
    {
        return $this->connection != null;
    }

    private $connection;
}