<form action= "process" id="form" class="question_form" method="post">

    <div class="funkyradio">

        <?php
        foreach ($questions as $question_id => $question): ?>


            <pre id="question"><h4><?= $question['text'] ?></h4></pre>


            <?php foreach ($question['answers'] as $answer): ?>

                <div class="funkyradio-default">

                    <input type="radio" name="answers[<?= $question_id ?>]" value="<?= $answer['id'] ?>" id="answer<?= $answer['id'] ?>">
                    <label for="answer<?= $answer['id'] ?>"><?= $answer['text'] ?></label><br>

                </div>

            <?php endforeach; ?>

            <br>


        <?php endforeach; ?>

    </div>

    <button class="btn btn-primary" type="submit" name="salvesta">Edasi</button>

</form>


