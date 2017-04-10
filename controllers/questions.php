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
        $this->answers = get_all("SELECT * FROM answers WHERE question_id = '{$question_id}'");
    }

    function edit()
    {
        $question_id = $this->params[0];
        $this->question = get_first("SELECT * FROM questions WHERE question_id = '{$question_id}'");
        $this->answers = get_all("SELECT * FROM answers where question_id = '{$question_id}'");
    }

    function post_edit()
    {
        //Change question
        $data = $_POST['data'];
        $data['question_name'] = htmlentities($data['question_name'], ENT_QUOTES);
        update('questions', $data,"question_id = '$data[question_id]'");
        //Delete old answers and get those new into DB
        (isset($_POST['subcheck'])) ? 1 : 0;
        $answer_data = $_POST['answers'];
        q("DELETE FROM answers WHERE question_id ='$data[question_id]'");
        for($i = 1; $i<4; $i++){
            $answer = htmlentities($answer_data["answer_$i"], ENT_QUOTES);
            $right_answer = (isset($answer_data["right_answer_$i"])) ? 1 : 0;
            $insert_data = array('answer' => $answer, 'right_answer' => $right_answer, 'question_id' => $data['question_id']);
            insert('answers',$insert_data);
        }
        header('Location: ' . BASE_URL . 'questions/');
    }
    function post_add(){
        //Question adding
        $data = $_POST['data'];
        $data['question_name'] = htmlentities($data['question_name'], ENT_QUOTES);
        insert("questions",$data);
        $question_id = get_one("SELECT question_id FROM questions WHERE question_name = '$data[question_name]'");
        //Answers adding
        $answer_data = $_POST['answers'];
        for($i = 1; $i<4; $i++){
            $answer = htmlentities($answer_data["answer_$i"], ENT_QUOTES);
            $right_answer = (isset($answer_data["right_answer_$i"])) ? 1 : 0;
            $insert_data = array('answer' => $answer, 'right_answer' => $right_answer, 'question_id' => $question_id);
            insert('answers',$insert_data);
        }
    }


    function ajax_delete()
    {
        exit(q("DELETE FROM questions WHERE question_id = '{$_POST['question_id']}'") ? 'Ok' : 'Fail');
    }



}