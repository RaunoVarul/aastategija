<?php namespace Halo;

use Aastategija\Practicals as P;

class practicals extends Controller
{

    function index()
    {
        $this->practical_test = get_first("SELECT * FROM practicals ORDER BY rand() limit 1");
    }

    function AJAX_practicalTestAnswer()
    {
        $user_id = $_SESSION["user_id"];
        $practical_test_answer = $_POST["practical_test_answer"];
        $practical_question_id = $_POST["practical_question_id"];
        P::sendAnswer($user_id, $practical_test_answer, $practical_question_id);
    }
}