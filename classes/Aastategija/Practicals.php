<?php
/**
 * Created by PhpStorm.
 * User: RaunoV
 * Date: 4/10/2017
 * Time: 12:54
 */
namespace Aastategija;

class Practicals {

    static function sendAnswer($user_id, $practical_test_answer, $practical_question_id)
    {
        update("testers", [
            'practical_answ' => $practical_test_answer,
            'practical_id' => $practical_question_id],
            "tester_id = $user_id");
        echo "success";
    }

    static function get_question()
    {
        $prac_question = '';

        q("select practical_name from practicals, testers where practical_id = testers.practical_id and tester_id = '{$tester_id}'", $q);
    }
}