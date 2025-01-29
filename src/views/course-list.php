<?php

/**
 * Course listing view
 */
require_once __DIR__ . '/../includes/course.php';
?>

<?php foreach ($courseList as $course): ?>
    <div class="course-card">
        <img class="card-img" src="<?= '/images/' . $course['course_image'] ?>" alt="Course image">
        <div class="card-inner">
            <h2><?= $course['course_title']; ?></h2>
            <p><?= $course['course_description']; ?></p>
            <div class="course-cta">
                <a class="course-btn" href="<?= $course['course_button_link']; ?>">VIEW COURSE</a>
            </div>
        </div>
    </div>
<?php endforeach ?>