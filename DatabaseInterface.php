<?php
// DatabaseInterface.php

/**
 * Interface DatabaseInterface
 * 定義數據庫操作接口，用於不同數據庫實現。
 */
interface DatabaseInterface
{
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
    public function connect($host, $user, $password, $dbName, $port);

    /**
     * 執行 SQL 查詢
     *
     * @param string $sql 要執行的 SQL 語句
     * @return void
     */
    public function query($sql);

    /**
     * 斷開數據庫連接
     *
     * @return void
     */
    public function disconnect();
}
