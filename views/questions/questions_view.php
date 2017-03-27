<?php if ($auth->is_admin): ?>
    <h3><?= __("Lisa uus küsimus") ?></h3>

    <form method="post" id="form">
    <form id="form" method="post">
        <table class="table table-bordered table-hover table-condensed">
            <tr>
                <th><?= __("Küsimuse nimi") ?></th>
                <td colspan="2"><input style="width: 99%;" class="form-control" type="text" name="data[question_name]" placeholder=""/></td>
            </tr>

            <?php for ($i=0; $i < 3; $i++){ ?>
                <tr>
                    <th><?= __('Vastus') ?><?= $i+1 ?></th>
                    <td><input class="form-control" type="text" name="answers[answer_<?= $i+1 ?>]"/></td>
                    <td><label for="<?= $question['question_id'] ?>">Õige vastus? </label><input type="checkbox" name="answers[right_answer_<?= $i+1 ?>]"/></td>
                </tr>
            <?php } ?>
        </table>

        <button class="btn btn-primary" type="submit"><?= __("Lisa") ?></button>
    </form>
<?php endif; ?>