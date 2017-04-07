<?php $count = 1; ?>
<form action="<?=BASE_URL?>" method="post" id="quests">
    <?php foreach($questions as $question) {?>
        <legend>#<?=$count?><br><?=htmlspecialchars($question['question_name'])?></legend>
        <?php foreach($answers as $answer) {?>
            <?php if($answer['question_id'] == $question['question_id']) {?>
        <input type="radio" class="col-lg-0.5" name="que<?=$count?>" value="1"><?=htmlspecialchars($answer['answer'])?><br>
            <?php }?>
            <?php }?>
        <?php
        $count ++;
    } ?>
    <input type="submit" class="btn btn-success col-lg-2" value="Edasi"><br><br><br><br>
</form><br><br><br><br>