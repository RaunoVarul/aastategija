<?php namespace Halo;

class ends extends Controller
{

    function index()
    {
        $this->ends = get_first("SELECT * FROM testers where tester_id=".$_SESSION['user_id']);
    }


}