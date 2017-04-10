<h1><?= __("End") ?> '<?= $end['end_name'] ?>'</h1>
<table class="table table-bordered">

    <tr>
        <th><?= __("End") ?> ID</th>
        <td><?= $end['end_id'] ?></td>
    </tr>

    <tr>
        <th><?= __("End") ?><?= __("name") ?></th>
        <td><?= $end['end_name'] ?></td>
    </tr>

</table>

<!-- EDIT BUTTON -->
<?php if ($auth->is_admin): ?>
    <form action="ends/edit/<?= $end['end_id'] ?>">
        <div class="pull-right">
            <button class="btn btn-primary">
                <?= __("Edit") ?>
            </button>
        </div>
    </form>
<?php endif; ?>