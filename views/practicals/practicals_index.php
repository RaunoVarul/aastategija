<style>
    .center {
        margin: auto;
        width: 50%;
    }
</style>
<script>
    history.pushState(null, null, document.URL);
    window.addEventListener('popstate', function () {
        history.pushState(null, null, document.URL);
    });
</script>

<div class="center">
    <h1>Praktiline test</h1>

    <br>
    <table class="table table-bordered">
        <tr>
            <textarea rows="15" cols="100" disabled="disabled"><?= $practical_test['practical_name']; ?></textarea>
        </tr>
    </table>
</div>

<div class="center">
    <br/>
    <form>
        <table class="table table-bordered">
            <tr>
                <textarea rows="20" cols="100" name="btn btn-outline-primary" id="practical_test_answer" placeholder="Kirjuta oma vastus siia ja ära unusta vormingut"></textarea>
                <br/>
                <input type="button" id="sendAnswer" class="btn btn-primary btn-lg" value="Edasta!">
            </tr>
        </table>
    </form>

</div>

<script type="text/javascript">
    $(function () {
        $('#sendAnswer').click(function () {
            var practical_test_answer = $("#practical_test_answer").val();
            var practical_question_id = '<?=$practical_test['practical_id'];?>';
            $.post("practicals/practicalTestAnswer", {
                practical_test_answer: practical_test_answer,
                practical_question_id: practical_question_id
            }).done(function (data) {
                if (data == "success") {
                    location.href = "<?=BASE_URL . ends ?>"
                } else {
                    alert("Ups midagi läks valesti.")
                }
            });
        });
    });
</script>