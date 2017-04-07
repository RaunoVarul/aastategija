<?php namespace Halo;

class welcome extends Controller
{

    function index()
    {
        // checks user permissions and redirects them to the correct page
        $user = get_first("SELECT * FROM users WHERE user_id=".$_SESSION['user_id']);

        if($user['is_admin'] == 1) {
            header('Location:'.BASE_URL.'questions');
        } else {
            header('Location:'.BASE_URL.'tests');
        }
    }

    function AJAX_index()
    {
        echo "\$_POST:<br>";
        var_dump($_POST);
    }

    function POST_index()
    {
        echo "\$_POST:<br>";
        var_dump($_POST);
    }
}