
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["answer_file"]["name"]);
if (move_uploaded_file($_FILES["answer_file"]["tmp_name"], $target_file)) {
    echo "فایل شما با موفقیت ارسال شد.";
} else {
    echo "خطا در ارسال فایل.";
}
?>
