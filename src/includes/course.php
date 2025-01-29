<?php
// DB configs import
require_once __DIR__ . '/../../config/database/db_connection.php';

// CourseModel Initialization
require_once __DIR__ . '/../model/CourseModel.php';
$courseModel = new CourseModel($db);

// Fetch Courses
try {
    $courseList = $courseModel->getAllCourses();
} catch (Exception $e) {
    echo "Error fetching courses: " . $e->getMessage();
}

