<?php namespace Halo;

class practicals extends Controller
{

    function index()
    {
        $this->practicals = get_all("SELECT * FROM practicals");
    }

    function view()
    {
        $practical_id = $this->params[0];
        $this->practical = get_first("SELECT * FROM practicals WHERE practical_id = '{$practical_id}'");
    }

    function edit()
    {
        $practical_id = $this->params[0];
        $this->practical = get_first("SELECT * FROM practicals WHERE practical_id = '{$practical_id}'");
    }

    function post_edit()
    {
        $data = $_POST['data'];
        insert('practical', $data);
    }

    function ajax_delete()
    {
        exit(q("DELETE FROM practicals WHERE practical_id = '{$_POST['practical_id']}'") ? 'Ok' : 'Fail');
    }

}