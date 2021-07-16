<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giải phương trình căn bậc 2</title>
</head>
<body>
<?php
$result = '';
if (isset($_POST['calculate']))
{
    $a = isset($_POST['a']) ? $_POST['a'] : '';
    $b = isset($_POST['b']) ? $_POST['b'] : '';
    $c = isset($_POST['c']) ? $_POST['c'] : '';

    $delta = ($b*$b) - (4*$a*$c);

    if ($delta < 0){
        $result = 'Phương trình vô nghiệp';
    }
    else if ($delta == 0){
        $result = 'Phương trình nghiệp kép x1 = x2 = ' . (-$b/2*$a);
    }
    else {
        $result = 'Phương trình có hai nghiệp phân biệt, x1 = ' . ((-$b + sqrt($delta))/2*$a);
        $result .= ',x2 = ' . ((-$b - sqrt($delta))/2*$a);
    }
}
?>
<form action="" method="post">
    <input type="text" name="a" value="" />x <sup>2</sup>
    +
    <input type="text" name="b" value="" />x
    +
    <input type="text" name="c" value="" />
    <br>
    <input type="submit" name="calculate" value="Tính" />
</form>
<?php
echo $result;
?>
</body>
</html>
