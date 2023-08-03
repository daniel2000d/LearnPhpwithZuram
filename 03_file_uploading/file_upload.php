<?php

$errorMessage = '';

if (isset($_FILES['file'])) {

    $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    $ext = strtolower($ext);


    if ($_FILES['file']['size'] > 5 * 1024 * 2014) {
        $errorMessage = 'File size can not be more than 5MB';

    } elseif (!in_array($ext, ['jpg', 'png', 'jpeg', 'svg'])) { // 8.
        $errorMessage = 'You can only upload images';
    } elseif ($_FILES['file']['error'] === 0) {
        move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name']);
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p><?php echo $errorMessage ?></p>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file"><br>
    <button>Submit</button>
</form>
</body>
</html>