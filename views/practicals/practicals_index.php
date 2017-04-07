<h3><?= __("Practicals") ?></h3>
<ul class="list-group">
    <?php foreach ($practicals as $practical): ?>
        <li class="list-group-item">
            <a href="practicals/<?= $practical['practical_id'] ?>/<?= $practical['practical_name'] ?>"><?= $practical['practical_name'] ?></a>
        </li>
    <?php endforeach ?>
</ul>

<?php if ($auth->is_admin): ?>
<h3><?= __("Add new practical") ?></h3>

<form method="post" id="form">
    <form id="form" method="post">
        <table class="table table-bordered">
            <tr>
                <th><?= __("Name") ?></th>
                <td><input type="text" name="data[practical_name]" placeholder=""/></td>
            </tr>
        </table>

        <button class="btn btn-primary" type="submit"><?= __("Add") ?></button>
    </form>
    <?php endif; ?>
