<?php namespace Halo;

class testers extends Controller
{

    function index()
    {
        $this->testers = get_all("SELECT * FROM testers");
    }

    function view()
    {
        $tester_id = $this->params[0];
        $this->tester = get_first("SELECT * FROM testers WHERE tester_id = '{$tester_id}'");
    }

    function edit()
    {
        $tester_id = $this->params[0];
        $this->tester = get_first("SELECT * FROM testers WHERE tester_id = '{$tester_id}'");
    }

    function post_edit()
    {
        $data = $_POST['data'];
        insert('tester', $data);
    }

    function ajax_delete()
    {
        exit(q("DELETE FROM testers WHERE tester_id = '{$_POST['tester_id']}'") ? 'Ok' : 'Fail');
    }

}