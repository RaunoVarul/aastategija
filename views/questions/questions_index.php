<!-- Uus tabel -->
<div id="question_table">
    <table class="table table-bordered table-hover table-striped">
        <thead class="table-info">
        <tr class="">
            <th>ID</th>
            <th>Küsimus</th>
            <th>Vastused</th>
            <th>Muuda</th>
        </tr>
        </thead>
        <?php foreach ($questions as $question): ?>
            <tr>
                <td><?= $question['question_id'] ?></td>
                <td><?= $question['question_name'] ?></td>
                <td>
                    <?php
                    foreach ($answers as $answer): ?>
                        <?php if($answer['question_id'] == $question['question_id'] AND $answer['right_answer'] ==1){?>
                            <p style="color: green;"><?= $answer['answer'] ?></p>
                        <?php }elseif($answer['question_id'] == $question['question_id']){ ?>
                            <p style="color: red;"><?= $answer['answer'] ?></p>
                        <?php } ?>
                    <?php endforeach ?>
                </td>
                <td> <form action="questions/edit/<?= $question['question_id'] ?>">
                        <button class="btn btn-primary pull" style="width: 80px;">
                            Muuda
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>


