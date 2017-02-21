<h3><?= __("Questions") ?></h3>
<ul class="list-group">
    <?php foreach ($questions as $question): ?>
        <li class="list-group-item">
            <a href="questions/<?= $question['question_id'] ?>/<?= $question['question_name'] ?>"><?= $question['question_name'] ?></a>
        </li>
    <?php endforeach ?>
</ul>

<?php if ($auth->is_admin): ?>
<h3><?= __("Add new question") ?></h3>

<form method="post" id="form">
    <form id="form" method="post">
        <table class="table table-bordered">
            <tr>
                <th><?= __("Name") ?></th>
                <td><input type="text" name="data[question_name]" placeholder=""/></td>
            </tr>
        </table>

        <button class="btn btn-primary" type="submit"><?= __("Add") ?></button>
    </form>
    <?php endif; ?>
