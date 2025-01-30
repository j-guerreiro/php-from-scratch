<?php

namespace Config\Database\Connection\Test\Script;

use PDO;
use PDOException;

/**
 * Test database output by running inside the container:
 * $ php db_test.php
 */

require_once "./db_connection.php";

try {
    $sql = "SELECT * FROM Courses";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $courses = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Print rows in terminal
    if (!empty($courses)) {
        foreach ($courses as $course) {
            echo "____________________________________\n";
            echo "| ID: " . $course['id'] . "\n";
            echo "| Title: " . $course['title'] . "\n";
            echo "| Image: " . $course['image'] . "\n";
            echo "| Description: " . $course['description'] . "\n";
            echo "| Button Link: " . $course['button_link'] . "\n";
            echo "____________________________________\n";
        }
    } else {
        echo "No courses records found in the table.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
