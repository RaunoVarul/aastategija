<h3><?= __("Tests") ?></h3>
<ul class="list-group">
    <?php foreach ($tests as $test): ?>
        <li class="list-group-item">
            <a href="tests/<?= $test['test_id'] ?>/<?= $test['test_name'] ?>"><?= $test['test_name'] ?></a>
        </li>
    <?php endforeach ?>
</ul>

<?php if ($auth->is_admin): ?>
<h3><?= __("Add new test") ?></h3>

<form method="post" id="form">
    <form id="form" method="post">
        <table class="table table-bordered">
            <tr>
                <th><?= __("Name") ?></th>
                <td><input type="text" name="data[test_name]" placeholder=""/></td>
            </tr>
        </table>

        <button class="btn btn-primary" type="submit"><?= __("Add") ?></button>
    </form>
    <?php endif; ?>
