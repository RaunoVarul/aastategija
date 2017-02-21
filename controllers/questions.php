<?php namespace Halo;

class questions extends Controller
{

    function index()
    {
        $this->questions = get_all("SELECT * FROM questions");
        $this->answers = get_all("SELECT * FROM answers");
    }

    function view()
    {
        $question_id = $this->params[0];
        $this->question = get_first("SELECT * FROM questions WHERE question_id = '{$question_id}'");
        $this->answer = get_all("SELECT * FROM answers WHERE question_id = '{$question_id}'");
    }

    function edit()
    {
        $question_id = $this->params[0];
        $this->question = get_first("SELECT * FROM questions WHERE question_id = '{$question_id}'");
    }

    function post_edit()
    {
        $data = $_POST['data'];
        insert('question', $data);
    }

    function ajax_delete()
    {
        exit(q("DELETE FROM questions WHERE question_id = '{$_POST['question_id']}'") ? 'Ok' : 'Fail');
    }



}