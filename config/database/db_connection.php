<?php

namespace Config\Database\Connection;

use Dotenv;
use PDO;
use PDOException;

// Composer Autoloader and Environment Loader
require_once __DIR__ . '/../../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Database Config
$host = $_ENV['DB_HOST']; // e.g., 'db' for DDEV containers, '127.0.0.1' for local
$dbname = $_ENV['DB_NAME'];     
$username = $_ENV['DB_USERNAME']; 
$password = $_ENV['DB_PASSWORD'];
$port = $_ENV['DB_PORT'] ?? 3306; // Default to 3306 if not specified

// PDO Connection with Exception Handling
try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Database connection failed: ' . $e->getMessage());
}