<?php
// TODO - main section - middle
?>

<section class="courses-section">
    <div class="block-title">
        <h1>MY COURSES</h1>
        <hr>
    </div>

    <div class="cards-grid">
        <?php require_once __DIR__ . '/../view/course-list.php'; ?>
        <div class="course-card">
            <a href="#">
                <img class="card-img add-course" src="../../images/add-course.jpg"></img>
            </a>
            <div class="card-inner">
                <h2>Add course to your collection</h2>
                <p>Here you can add more courses!</p>
                <div class="course-cta">
                    <a href="#">ADD COURSE</a>
                </div>
            </div>
        </div>
    </div>
</section>