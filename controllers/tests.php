<?php namespace Halo;

use \Aastategija\Tests as Test_module;
use \Aastategija\Users as User_module;

class tests extends Controller
{

    function index()
    {
        $this->questions =Test_module::get_questions() ;



    }


    function salvesta()
    {

        // checks the correct answer for a question
        if (isset($_POST['salvesta'])) {
            $correct_answers = Test_module::get_correct_answers();
            $score = Test_module::get_score($_POST ['answers'], $correct_answers);
            User_module::set_theoretical_score($_SESSION ['user_id'], $score);
            header('Location: ' . BASE_URL . 'practicals');
            exit();
        }
    }

    function ajax_delete()
    {
        exit(q("DELETE FROM tests WHERE test_id = '{$_POST['test_id']}'") ? 'Ok' : 'Fail');
    }

}