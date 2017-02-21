<?php namespace Halo;
/**
 * Created by PhpStorm.
 * User: RaunoV
 * Date: 1/31/2017
 * Time: 15:35
 */

class courses extends Controller
{
    function index()
    {
        $this->courses = get_all("SELECT * FROM courses");
    }

    function view()
    {
        $course_id = $this->params[0];
        $this->course = get_first("SELECT * FROM courses WHERE course_id = $course_id");
    }

    function edit()
    {
        $course_id = $this->params[0];
        $this->course = get_first("SELECT * FROM courses WHERE course_id = $course_id");
    }

    function post_edit()
    {
        $course_id = $this->params[0];
        $data = $_POST['data'];
        update('courses',$data,"course_id='$course_id'");
        header('Location: ' . 'http://localhost/aastategija/courses/' . $course_id, true, $statusCode);
    }
}