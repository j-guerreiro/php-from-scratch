<?php

/**
 * Course listing view
 */
require_once __DIR__ . '/../includes/course.php';
?>

<?php foreach ($courseList as $course): ?>
    <div class="course-card">
        <img class="card-img" src="<?= '/images/' . $course['imagem_Curso'] ?>" alt="Course image">
        <div class="card-inner">
            <h2><?= $course['titulo_Curso']; ?></h2>
            <p><?= $course['descricao_Curso']; ?></p>
            <div class="course-cta">
                <a class="course-btn" href="<?= $course['link_botao_Curso']; ?>">VER CURSO</a>
            </div>
        </div>
    </div>
<?php endforeach ?>