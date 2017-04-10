<?php namespace Halo;
/**
 * Created by PhpStorm.
 * User: RaunoV
 * Date: 4/10/2017
 * Time: 10:19
 */

use \Aastategija\Tests as Test_module;
use \Aastategija\Users as User_module;

class process extends Controller {

    public $requires_auth = false;

    function index()
    {
        $correct_answers = Test_module::get_correct_answers();
        $score = Test_module::get_score($_POST ['answers'], $correct_answers);
        User_module::set_theoretical_score($_SESSION ['user_id'], $score);
        header('Location: ' . BASE_URL . 'practicals');
        exit();
    }
}