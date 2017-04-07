<h1><?= __("Practical") ?> '<?= $practical['practical_name'] ?>'</h1>
<table class="table table-bordered">

    <tr>
        <th><?= __("Practical") ?> ID</th>
        <td><?= $practical['practical_id'] ?></td>
    </tr>

    <tr>
        <th><?= __("Practical") ?><?= __("name") ?></th>
        <td><?= $practical['practical_name'] ?></td>
    </tr>

</table>

<!-- EDIT BUTTON -->
<?php if ($auth->is_admin): ?>
    <form action="practicals/edit/<?= $practical['practical_id'] ?>">
        <div class="pull-right">
            <button class="btn btn-primary">
                <?= __("Edit") ?>
            </button>
        </div>
    </form>
<?php endif; ?>