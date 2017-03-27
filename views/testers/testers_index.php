<h3><?= __("Testers") ?></h3>
<ul class="list-group">
    <?php foreach ($testers as $tester): ?>
        <li class="list-group-item">
            <a href="testers/<?= $tester['tester_id'] ?>/<?= $tester['tester_name'] ?>"><?= $tester['tester_name'] ?></a>
        </li>
    <?php endforeach ?>
</ul>

<?php if ($auth->is_admin): ?>
<h3><?= __("Add new tester") ?></h3>

<form method="post" id="form">
    <form id="form" method="post">
        <table class="table table-bordered">
            <tr>
                <th><?= __("Name") ?></th>
                <td><input type="text" name="data[tester_name]" placeholder=""/></td>
            </tr>
        </table>

        <button class="btn btn-primary" type="submit"><?= __("Add") ?></button>
    </form>
    <?php endif; ?>
