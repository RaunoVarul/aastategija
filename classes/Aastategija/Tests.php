<?php

namespace Aastategija;
class Tests
{
    static function get_questions()
    {

        if (isset($_SESSION['questions'])) {

            return $_SESSION['questions'];
        }

        $questions = [];

        // get questions
        // limited to 10
        q("SELECT * FROM answers JOIN (select * from questions order by rand() limit 10) as questions USING (question_id)", $q);

        // Move answer options under questions
        while ($row = mysqli_fetch_assoc($q)) {
            $questions[$row['question_id']]['text'] = $row['question_name'];
            $questions[$row['question_id']]['answers'][] = [
                'id' => $row['answer_id'],
                'text' => $row['answer'],
                'correct' => $row['right_answer']
            ];
        }
        $_SESSION['questions'] = $questions;


        return $questions;
    }
}