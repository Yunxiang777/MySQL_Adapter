# MySQL_Adapter

## 簡介

`MySQL Adapter` 是一個 PHP 適配器設計模式示例，旨在演示如何將舊的 `OldMySQLDatabase` 類適配到通用的 `DatabaseInterface` 接口。通過這個適配器，你可以使用新系統的方法來操作舊系統的數據庫。

## 特性

- 使用 `.env` 文件管理數據庫配置
- 適配舊系統的數據庫類到通用的接口
- 支援連接、執行查詢、斷開連接等操作
