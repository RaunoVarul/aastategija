<h1><?= __("Answer") ?> '<?= $answer['answer_name'] ?>'</h1>
<table class="table table-bordered">

    <tr>
        <th><?= __("Answer") ?> ID</th>
        <td><?= $answer['answer_id'] ?></td>
    </tr>

    <tr>
        <th><?= __("Answer") ?><?= __("name") ?></th>
        <td><?= $answer['answer_name'] ?></td>
    </tr>

</table>

<!-- EDIT BUTTON -->
<?php if ($auth->is_admin): ?>
    <form action="answers/edit/<?= $answer['answer_id'] ?>">
        <div class="pull-right">
            <button class="btn btn-primary">
                <?= __("Edit") ?>
            </button>
        </div>
    </form>
<?php endif; ?>