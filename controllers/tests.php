<?php namespace Halo;

use \Aastategija\Tests as Test_module;

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
            $punktid = 0;
            $questions =Test_module::get_questions() ;
            for ($i = 0; $i < 10; $i++) {
                if ($_POST['answ' . $i] == $questions[$i]['answer']) {
                    $punktid++;
                }
            }

            // sends the amount of points to results
            $sql = array(
                'theor_test' => $punktid,
                'practical_test' => '0'
            );


            // updates current session data
            update('testers', $sql, 'tester_id =' . $_SESSION['user_id']);
        }
    }

    function ajax_delete()
    {
        exit(q("DELETE FROM tests WHERE test_id = '{$_POST['test_id']}'") ? 'Ok' : 'Fail');
    }

}