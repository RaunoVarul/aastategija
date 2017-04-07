<h1><?= __("Question") ?> '<?= $question['question_name'] ?>'</h1>
<table class="table table-bordered">

    <tr>
        <th><?= __("Question") ?> ID</th>
        <td><?= $question['question_id'] ?></td>
    </tr>

    <tr>
        <th><?= __("Question ") ?><?= __("name") ?></th>
        <td><?= $question['question_name'] ?></td>
    </tr>
    <?php foreach ($answers as $a): ?>
        <tr>
            <th><?= __("vastus")?></th>
            <td><?= $a['answer']?></td>
        </tr>
    <?php endforeach?>

</table>

<!-- EDIT BUTTON -->
<?php if ($auth->is_admin): ?>
    <form action="questions/edit/<?= $question['question_id'] ?>">
        <div class="pull-right">
            <button class="btn btn-primary">
                <?= __("Edit") ?>
            </button>
        </div>
    </form>
<?php endif; ?>