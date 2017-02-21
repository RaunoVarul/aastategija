<?php namespace Halo;

class answers extends Controller
{

    function index()
    {
        $this->answers = get_all("SELECT * FROM answers");
    }

    function view()
    {
        $answer_id = $this->params[0];
        $this->answer = get_first("SELECT * FROM answers WHERE answer_id = '{$answer_id}'");
    }

    function edit()
    {
        $answer_id = $this->params[0];
        $this->answer = get_first("SELECT * FROM answers WHERE answer_id = '{$answer_id}'");
    }

    function post_edit()
    {
        $data = $_POST['data'];
        insert('answer', $data);
    }

    function ajax_delete()
    {
        exit(q("DELETE FROM answers WHERE answer_id = '{$_POST['answer_id']}'") ? 'Ok' : 'Fail');
    }

}