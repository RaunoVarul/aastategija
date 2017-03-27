<h1><?= __("Tester") ?> '<?= $tester['tester_name'] ?>'</h1>
<table class="table table-bordered">

    <tr>
        <th><?= __("Tester") ?> ID</th>
        <td><?= $tester['tester_id'] ?></td>
    </tr>

    <tr>
        <th><?= __("Tester") ?><?= __("name") ?></th>
        <td><?= $tester['tester_name'] ?></td>
    </tr>

</table>

<!-- EDIT BUTTON -->
<?php if ($auth->is_admin): ?>
    <form action="testers/edit/<?= $tester['tester_id'] ?>">
        <div class="pull-right">
            <button class="btn btn-primary">
                <?= __("Edit") ?>
            </button>
        </div>
    </form>
<?php endif; ?>