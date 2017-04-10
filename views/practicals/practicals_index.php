<h3><?= __("Practicals") ?></h3>
<ul class="list-group">
    <?php foreach ($practicals as $practical): ?>
        <li class="list-group-item">
            <a href="practicals/<?= $practical['practical_id'] ?>/<?= $practical['practical_name'] ?>"><?= $practical['practical_name'] ?></a>
        </li>
    <?php endforeach;
    var_dump($_POST['input']);?>
</ul>