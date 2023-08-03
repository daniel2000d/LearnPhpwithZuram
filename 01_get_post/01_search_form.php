<?php



echo '<pre>';
var_dump($_GET);
echo '</pre>';


$keyword = $_GET['keyword'];
echo $keyword.'<br>';

$keyword = '';
if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
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
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
    <input type="text" name="keyword"
           placeholder="Type and hit enter" value="<?php echo $keyword ?>">
    <button>Search</button>
</form>
</body>
</html>