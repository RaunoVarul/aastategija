<h3><?= __("Ends") ?></h3>
<ul class="list-group">
    <?php foreach ($ends as $end): ?>
        <li class="list-group-item">
            <a href="ends/<?= $end['end_id'] ?>/<?= $end['end_name'] ?>"><?= $end['end_name'] ?></a>
        </li>
    <?php endforeach ?>
</ul>

<?php if ($auth->is_admin): ?>
<h3><?= __("Add new end") ?></h3>

<form method="post" id="form">
    <form id="form" method="post">
        <table class="table table-bordered">
            <tr>
                <th><?= __("Name") ?></th>
                <td><input type="text" name="data[end_name]" placeholder=""/></td>
            </tr>
        </table>

        <button class="btn btn-primary" type="submit"><?= __("Add") ?></button>
    </form>
    <?php endif; ?>
