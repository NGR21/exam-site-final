
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>صفحه امتحان</title>
</head>
<body>
    <h2>فایل سوالات:</h2>
    <a href="files/questions.pdf" download>دانلود سوالات</a>

    <h3>ارسال پاسخ</h3>
    <form action="submit.php" method="post" enctype="multipart/form-data">
        انتخاب فایل پاسخ: <input type="file" name="answer_file">
        <input type="submit" value="ارسال">
    </form>
</body>
</html>
