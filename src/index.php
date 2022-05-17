<?php
$file_txt = "data/data.txt";

if (isset($_POST['save'])) {
    // Security check
    $content = test_input($_POST['textbox'] . "");

    file_put_contents($file_txt, $content);

    header("location: http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
    exit();
}


// Security check
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,height=device-height,user-scalable=no">
    <meta charset="utf-8">
    <meta name="theme-color" content="#4d6952">
    <meta name="robots" content="none">
    <link rel="icon" href="http://data.svdu.cz/ico/notepad-ico.jpg">
    <link rel="stylesheet" href="css/style4.css">
    <link rel="stylesheet" href="css/komp.css">
    <title>Блокнот</title>
</head>

<body>
    <div class="container">
        <form name="forma" method="post">
            <textarea class="box-text" id="textbox" name="textbox"><?php require_once 'data/data.txt'; ?></textarea>
            <div role="button" class="but-save"></div>
            <button class="off" name="save">Сохранить</button>
        </form>

    </div>

    <div id="myProgress" class="off">
        <div id="myBar"></div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>