<?php
$studentGrades = [
    "Student_1" => ["Math" => 90, "English" => 80, "Science" => 75],
    "Student_2" => ["Math" => 60, "English" => 55, "Science" => 70],
    "Student_3" => ["Math" => 50, "English" => 65, "Science" => 60]
];

function avgGrade($studentGrades)
{
    foreach ($studentGrades as $student => $subject) {
        $avg = 0;
        foreach ($subject as $key => $value) {
            $avg += $value;
        }
        $result = $avg / 3;
        if ($result >= 80 && $result <= 100) {
            $grade = "A+";
        } else if ($result >= 70 && $result <= 79) {
            $grade = "A";
        } else if ($result >= 60 && $result <= 69) {
            $grade = "A-";
        } else if ($result >= 50 && $result <= 59) {
            $grade = "B";
        } else {
            $grade = "F";
        }
        echo "$student Average grade=$grade\n";
    }
}
avgGrade($studentGrades);
