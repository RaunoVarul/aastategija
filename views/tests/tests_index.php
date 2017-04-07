<script src="vendor/components/jquery/jquery.js"></script>
<script>
    var request;
    $(function () {
        $('#form').bind('submit', function (event) {
            $(window).off('beforeunload');
            event.preventDefault();
            var $form = $(this);
            var $salvesta = "salvesta = 1";
            var $inputs = $form.find("input");
            var serializedData = $salvesta + "&" + $inputs.serialize();
            request = $.ajax({
                type: 'POST',
                url: 'tests/salvesta',
                data: $(this).serialize() + "&salvesta=1",
                success: function (response) {
                    window.location = "/aastategija/practicals";
                }
            });
        });
    });
</script>

<?php $count = 0; ?>
<form id="form" class="question_form" method="post">

    <div class="funkyradio">

        <?php
        foreach ($questions as $question_id => $question): ?>


            <pre id="question"><h4><?= $question['text'] ?></h4></pre>


            <?php foreach ($question['answers'] as $answer): ?>

                <div class="funkyradio-default">

                    <input type="radio" name="questions[<?= $question_id ?>]" value="<?= $answer['id'] ?>" id="answer<?= $answer['id'] ?>">
                    <label for="answer<?= $answer['id'] ?>"><?= $answer['text'] ?></label><br>

                </div>

            <?php endforeach; ?>

            <br>


        <?php endforeach; ?>

    </div>

    <button class="btn btn-primary" type="submit" name="salvesta">Edasi</button>

</form>


