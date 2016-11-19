<?php

//testing ssh

if (isset($_POST['arg1'], $_POST['arg2']))  {
    $arg1 = $_POST['arg1'];
    $arg2 = $_POST['arg2'];
    $action = '+';
    if ($_POST['action'] != '') {
        $action = $_POST['action'];
    }
} else {
    $arg1 = $arg2 = 0;
    $action = '+';
}

$plus = '+';
$minus = '-';
$div = '/';
$multiple = '*';
$res = '';


switch ($action) {
    case $plus:
        $res = $arg1 + $arg2;
        break;
    case $minus:
        $res = $arg1 - $arg2;
        break;
    case $div:
        if ($arg2 == 0) {
            $res = "can not divide on 0";
        } else {
            $res = round($arg1 / $arg2, 2);
        }
        break;
    case $multiple:
        $res = $arg1 * $arg2;
        break;
}
?>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body class="container">
<br />
<br />
<br />
<div style="text-align: center">
    <form method="post">
        <div class="form-group">
        <label for="arg1">Аргумент №1
            <input id="arg1" class="form-control" type="number" name="arg1" value="<?php echo $arg1?>" />
        </label>
        </div>
        <div class="form-group">
        <label for="arg2">Аргумент №2
            <input id="arg2" class="form-control" type="number" name="arg2" value="<?php echo $arg2?>" />
        </label>
        </div>
        <div class="form-group">
            <label for="action">Математическое действие
                <input id="action" class="form-control" type="text" name="action" maxlength="1" placeholder="Можно вводить: + - * /" />
            </label>
        </div>
        <div class="form-group">
            <label for="result">Результат:
                <input id="result" class="form-control" type="text" value="<?php echo $res;?>" readonly/>
            </label>
        </div>
        <input type="submit" value="Посчитать" />
    </form>
</div>
</body>
</html>

