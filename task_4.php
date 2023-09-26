<?php
$studentGrades = [
    "Student_1" => ["Math" => 80, "English" => 70, "Science" => 60],
    "Student_2" => ["Math" => 70, "English" => 65, "Science" => 90],
    "Student_3" => ["Math" => 60, "English" => 75, "Science" => 80]
];

function avgGrade($studentGrades)
{
    foreach ($studentGrades as $student => $subject) {
        $avg = 0;
        foreach ($subject as $key => $value) {
            $avg += $value;
        }
        $result = $avg / 3;
        echo "$student Average grade=$result\n";
    }
}
avgGrade($studentGrades);
