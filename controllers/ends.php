<?php namespace Halo;

class ends extends Controller
{

    function index()
    {
        $this->ends = get_all("SELECT * FROM ends");
    }

    function view()
    {
        $end_id = $this->params[0];
        $this->end = get_first("SELECT * FROM ends WHERE end_id = '{$end_id}'");
    }

    function edit()
    {
        $end_id = $this->params[0];
        $this->end = get_first("SELECT * FROM ends WHERE end_id = '{$end_id}'");
    }

    function post_edit()
    {
        $data = $_POST['data'];
        insert('end', $data);
    }

    function ajax_delete()
    {
        exit(q("DELETE FROM ends WHERE end_id = '{$_POST['end_id']}'") ? 'Ok' : 'Fail');
    }

}