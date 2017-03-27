<?php if (!$auth->is_admin): ?>
    <div class="alert alert-danger fade in">
        <button class="close" data-dismiss="alert">×</button>
        You are not an administrator.
    </div>
    <?php exit(); endif; ?>
<h1>Question '<?= $question['question_name'] ?>'</h1>
<form id="form" method="post">
    <table class="table table-bordered">
        <tr>
            <th><?= __('Question ID') ?></th>
            <td colspan="2"><input type="text" name="data[question_id]" value="<?= $question['question_id'] ?>"/></td>
        </tr>

        <tr>
            <th><?= __('Question name') ?></th>
            <td colspan="2"><input style="width: 99%" type="text" name="data[question_name]" value="<?= $question['question_name'] ?>"/></td>
        </tr>
        <!-- Echo all the answers and checkbox if they are right or not, check right one  -->
        <?php for ($i=0; $i < 3; $i++){ ?>
        <tr>
            <th><?= __('Answer name') ?><?= $i+1 ?></th>
            <td><input type="text" name="answers[answer_<?= $i+1 ?>]" value="<?= $answers[$i]['answer'] ?>"/></td>
            <?php
            //Get right_ answer to check right one
            $right_answer = get_one("SELECT answer FROM answers WHERE question_id = '{$question['question_id']}' AND right_answer = 1");
            ?>
            <td>
                <label for="<?= $question['question_id'] ?>">Is right?: </label>
                <input type="checkbox" name="answers[right_answer_<?= $i+1 ?>]" value="<?= $answers[$i]['right_answer'] ?>"
                    <?php if ($right_answer == $answers[$i]['answer']){echo "checked";} ?>/>
            </td>
            <?php } ?>

    </table>
</form>

<!-- BUTTONS -->
<div class="pull-right">

    <!-- CANCEL -->
    <button class="btn btn-default"
            onclick="window.location.href = 'questions/view/<?= $question['question_id'] ?>/<?= $question['questionname'] ?>'">
        <?= __("Cancel") ?>
    </button>

    <!-- DELETE -->
    <button class="btn btn-danger" onclick="delete_question(<?= $question['question_id'] ?>)">
        <?= __("Delete") ?>
    </button>

    <!-- SAVE -->
    <button class="btn btn-primary" onclick="$('#form').submit()">
        <?= __("Save") ?>
    </button>

</div>
<!-- END BUTTONS -->

<!-- JAVASCRIPT
==============================================================================-->
<script type="application/javascript">
    function delete_question() {
        $.post('<?=BASE_URL?>questions/delete', {question_id: <?= $question['question_id'] ?>}, function (response) {
            if(response == 'Ok'){
                window.location.href = '<?=BASE_URL?>questions';
            }
        })
    }
</script>