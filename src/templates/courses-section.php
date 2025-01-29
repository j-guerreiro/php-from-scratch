<?php
// TODO - main section - middle
?>

<section class="courses-section">
    <div class="block-title">
        <h1>MY COURSES</h1>
        <hr>
    </div>

    <div class="cards-grid">
        <?php require_once __DIR__ . '/../views/course-list.php'; ?>
        <div class="course-card">
            <a href="#">
                <img class="card-img" src="../../images/add-course.png"></img>
            </a>
        </div>
    </div>
</section>