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

    public static function get_correct_answers()
    {
        q("SELECT * FROM answers WHERE right_answer = 1", $q);
        while ($row = mysqli_fetch_assoc($q)) {
            $answers[$row['question_id']] = $row['answer_id'];
        }
        return $answers;
    }


    public static function get_score($submitted_answers, $correct_answers)
    {
        $score = 0;
        foreach ($submitted_answers as $question_id => $answer_id) {
            ("$correct_answers[$question_id] == $answer_id");
            if ($correct_answers[$question_id] == $answer_id)
                $score++;
        }
        return $score;
    }
}