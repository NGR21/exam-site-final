
<?php
if ($_POST['student_id'] === '12345' && $_POST['password'] === 'test') {
    header("Location: exam.php");
} else {
    echo "ورود ناموفق!";
}
?>
