<?php

/** 入口文件 */
require 'vendor/autoload.php';
require 'OldMySQLDatabase.php';
require 'DatabaseInterface.php';
require 'MySQLAdapter.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// 從 .env 文件中讀取數據庫配置
$host = $_ENV['DB_HOST'];
$port = $_ENV['DB_PORT'];
$user = $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];
$dbName = $_ENV['DB_NAME'];

// 初始化舊的 MySQL 數據庫對象
$oldMySQLDatabase = new OldMySQLDatabase();

// 通過適配器來使用新的通用接口
$adapter = new MySQLAdapter($oldMySQLDatabase);

// 使用適配器連接數據庫
$adapter->connect($host, $user, $password, $dbName, $port);
