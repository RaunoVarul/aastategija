<h1><?= __("Test") ?> '<?= $test['test_name'] ?>'</h1>
<table class="table table-bordered">

    <tr>
        <th><?= __("Test") ?> ID</th>
        <td><?= $test['test_id'] ?></td>
    </tr>

    <tr>
        <th><?= __("Test") ?><?= __("name") ?></th>
        <td><?= $test['test_name'] ?></td>
    </tr>

</table>

<!-- EDIT BUTTON -->
<?php if ($auth->is_admin): ?>
    <form action="tests/edit/<?= $test['test_id'] ?>">
        <div class="pull-right">
            <button class="btn btn-primary">
                <?= __("Edit") ?>
            </button>
        </div>
    </form>
<?php endif; ?>