<?php

$dsn = "pgsql:host=db;port=5432;dbname=db;";

$pdo = new PDO($dsn, "dbuser", "dbpwd");

$pdo->exec("CREATE TABLE users (id SERIAL PRIMARY KEY, name varchar(255) not null)");