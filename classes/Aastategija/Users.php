<?php
/**
 * Created by PhpStorm.
 * User: RaunoV
 * Date: 4/10/2017
 * Time: 10:05
 */

namespace Aastategija;
class Users
{
    public static function set_theoretical_score($user_id, $score)
    {
        update("testers", ["theor_test"=>$score], "tester_id = " .$user_id);
    }
}