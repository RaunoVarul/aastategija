<h3><?= __("Answers") ?></h3>
<ul class="list-group">
    <?php foreach ($answers as $answer): ?>
        <li class="list-group-item">
            <a href="answers/<?= $answer['answer_id'] ?>/<?= $answer['answer_name'] ?>"><?= $answer['answer_name'] ?></a>
        </li>
    <?php endforeach ?>
</ul>

<?php if ($auth->is_admin): ?>
<h3><?= __("Add new answer") ?></h3>

<form method="post" id="form">
    <form id="form" method="post">
        <table class="table table-bordered">
            <tr>
                <th><?= __("Name") ?></th>
                <td><input type="text" name="data[answer_name]" placeholder=""/></td>
            </tr>
        </table>

        <button class="btn btn-primary" type="submit"><?= __("Add") ?></button>
    </form>
    <?php endif; ?>
