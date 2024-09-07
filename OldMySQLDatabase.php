<?php
// OldMySQLDatabase.php

/**
 * Class OldMySQLDatabase
 * 舊的 MySQL 數據庫類，用於進行數據庫操作。
 */
class OldMySQLDatabase
{
    /**
     * @var mysqli MySQLi 連接對象
     */
    private $connection;

    /**
     * 打開到 MySQL 數據庫的連接
     *
     * @param string $host 數據庫主機
     * @param string $user 用戶名
     * @param string $password 密碼
     * @param string $dbName 數據庫名稱
     * @param int $port 數據庫端口
     * @return void
     */
    public function openConnection($host, $user, $password, $dbName, $port)
    {
        $this->connection = new mysqli($host, $user, $password, $dbName, $port);

        if ($this->connection->connect_error) {
            die("連接失敗: " . $this->connection->connect_error);
        }

        echo "已成功連接到 MySQL 數據庫。\n";
    }

    /**
     * 執行 SQL 語句
     *
     * @param string $sql 要執行的 SQL 語句
     * @return void
     */
    public function executeSQL($sql)
    {
        $result = $this->connection->query($sql);

        if ($result === TRUE) {
            echo "SQL 執行成功。\n";
        } else {
            echo "SQL 執行錯誤: " . $this->connection->error . "\n";
        }
    }

    /**
     * 關閉 MySQL 數據庫連接
     *
     * @return void
     */
    public function closeConnection()
    {
        $this->connection->close();
        echo "MySQL 連接已關閉。\n";
    }
}
