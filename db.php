<?php
$host = getenv("DB_HOST");
$port = getenv("DB_PORT") ?: "5432";
$dbname = getenv("DB_NAME");
$user = getenv("DB_USER");
$password = getenv("DB_PASSWORD");

if (!$host || !$dbname || !$user || !$password) {
    die("Database environment variables are missing. Check DB_HOST, DB_NAME, DB_USER, and DB_PASSWORD.");
}

$conn_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} sslmode=require";

$conn = pg_connect($conn_string);

if (!$conn) {
    die("Database connection failed.");
}
?>