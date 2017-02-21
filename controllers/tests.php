<?php namespace Halo;

class tests extends Controller
{

    function index()
    {
        $this->tests = get_all("SELECT * FROM tests");
    }

    function view()
    {
        $test_id = $this->params[0];
        $this->test = get_first("SELECT * FROM tests WHERE test_id = '{$test_id}'");
    }

    function edit()
    {
        $test_id = $this->params[0];
        $this->test = get_first("SELECT * FROM tests WHERE test_id = '{$test_id}'");
    }

    function post_edit()
    {
        $data = $_POST['data'];
        insert('test', $data);
    }

    function ajax_delete()
    {
        exit(q("DELETE FROM tests WHERE test_id = '{$_POST['test_id']}'") ? 'Ok' : 'Fail');
    }

}