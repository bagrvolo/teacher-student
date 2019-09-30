<?php

if ($_POST['teacher']) {
    include 'teacher_info.php';
} elseif ($_POST['student']) {
    include 'student_info.php';
} else {
    header('Location: /checkbox.html');
}
