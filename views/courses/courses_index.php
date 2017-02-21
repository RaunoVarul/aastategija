<ul class="list-group">
    <?php foreach ($courses as $course): ?>
        <li class="list-group-item">
            <a href="courses/<?= $course['course_id']?>">
                <?=$course['course_name']?>
            </a>
        </li>
    <?php endforeach ?>
</ul>
