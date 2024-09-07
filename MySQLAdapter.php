<?php
// MySQLAdapter.php

require_once 'DatabaseInterface.php';

/**
 * Class MySQLAdapter
 * MySQL 適配器類，用於將舊的 MySQLDatabase 類適配到通用的 DatabaseInterface。
 */
class MySQLAdapter implements DatabaseInterface
{
    /**
     * @var OldMySQLDatabase 舊的 MySQL 數據庫對象
     */
    private $mysqlDatabase;

    /**
     * MySQLAdapter 建構函數
     *
     * @param OldMySQLDatabase $mysqlDatabase 舊的 MySQL 數據庫對象
     */
    public function __construct(OldMySQLDatabase $mysqlDatabase)
    {
        $this->mysqlDatabase = $mysqlDatabase;
    }

    /**
     * 連接到數據庫
     *
     * @param string $host 數據庫主機
     * @param string $user 用戶名
     * @param string $password 密碼
     * @param string $dbName 數據庫名稱
     * @param int $port 數據庫端口
     * @return void
     */
    public function connect($host, $user, $password, $dbName, $port)
    {
        $this->mysqlDatabase->openConnection($host, $user, $password, $dbName, $port);
    }

    /**
     * 執行 SQL 查詢
     *
     * @param string $sql 要執行的 SQL 語句
     * @return void
     */
    public function query($sql)
    {
        $this->mysqlDatabase->executeSQL($sql);
    }

    /**
     * 斷開數據庫連接
     *
     * @return void
     */
    public function disconnect()
    {
        $this->mysqlDatabase->closeConnection();
    }
}
