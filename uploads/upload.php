

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>upload file- toidicode.com</title>
    <link rel="stylesheet" href="">
</head>
<body>
<form action="" method="post" enctype="multipart/form-data" style="margin-top: 50px;">


    <input type="file" name="fileUpload" value="">
    <input type="submit" name="up" value="Upload">

</form>
<?php
    if (isset($_POST['up']) && isset($_FILES['fileUpload'])) {
        if ($_FILES['fileUpload']['error'] > 0)
            echo "Upload lỗi rồi!";
        else {
            move_uploaded_file($_FILES['fileUpload']['tmp_name'], 'upload/' . $_FILES['fileUpload']['name']);
            echo "upload thành công <br/>";
            echo 'Dường dẫn: upload/' . $_FILES['fileUpload']['name'] . '<br>';
            echo 'Loại file: ' . $_FILES['fileUpload']['type'] . '<br>';
            echo 'Dung lượng: ' . ((int)$_FILES['fileUpload']['size'] / 1024) . 'KB';
        }
    }
?>
</body>
</html>