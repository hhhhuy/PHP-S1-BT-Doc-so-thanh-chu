<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<body>
<h2>Đọc Số Thành Chữ</h2>
<form method="post">
    <input type="text" name="number" placeholder="Enter a number"/>
    <input type="submit" value="Convert"/>
</form>
<?php
function Ones($string, $index)
{
    switch ($string[$index]) {
        case 0:
            echo 'Zero';
            break;
        case 1:
            echo 'One';
            break;
        case 2:
            echo 'Two';
            break;
        case 3:
            echo 'Three';
            break;
        case 4:
            echo 'Four';
            break;
        case 5:
            echo 'Five';
            break;
        case 6:
            echo 'Six';
            break;
        case 7:
            echo 'Seven';
            break;
        case 8:
            echo 'Eight';
            break;
        case 9:
            echo 'Nine';
            break;
    }
}

function Smaller_20($string, $index)
{
    switch ($string[$index]) {
        case 0:
            echo 'Ten';
            break;
        case 1:
            echo 'leven';
            break;
        case 2:
            echo 'Twelve';
            break;
        case 3:
            echo 'Thirteen';
            break;
        case 4:
            echo 'Fourteen';
            break;
        case 5:
            echo 'Fifteen';
            break;
        case 6:
            echo 'Sixteen';
            break;
        case 7:
            echo 'Seventeen';
            break;
        case 8:
            echo 'Nighteen';
            break;
        case 9:
            echo 'Nineteen';
            break;

    }
}

function Round_Ten_Number($string, $index)
{
    switch ($string[$index]) {
        case 2:
            echo 'Twenty ';
            break;
        case 3:
            echo 'Thirty ';
            break;
        case 4:
            echo 'Forty ';
            break;
        case 5:
            echo 'Fifty ';
            break;
        case 6:
            echo 'Sixty ';
            break;
        case 7:
            echo 'Seventy ';
            break;
        case 8:
            echo 'Nighty ';
            break;
        case 9:
            echo 'Ninety ';
            break;
    }
}

function Two_digit($string, $indexTens, $indexOnes)
{
    Round_Ten_Number($string, $indexTens) . Ones($string, $indexOnes);
}

function Hundreds($string, $index)
{
    switch ($string[$index]) {
        case 1:
            echo 'One Hundred ';
            break;
        case 2:
            echo 'Two Hundred ';
            break;
        case 3:
            echo 'three hundred ';
            break;
        case 4:
            echo 'Four Hundred ';
            break;
        case 5:
            echo 'Five Hundred ';
            break;
        case 6:
            echo 'Six Hundred ';
            break;
        case 7:
            echo 'Seven Hundred ';
            break;
        case 8:
            echo 'Night Hundred ';
            break;
        case 9:
            echo 'Nine Hundred ';
            break;
    }
}

function Two_number($string, $index)
{
    if ($string[$index] == 1) {
        Smaller_20($string, ++$index);
    } else if ($string[$index + 1] == 0) {
        Round_Ten_Number($string, $index);
    } else {
        Two_digit($string, $index, ++$index);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];
    if (strlen($number) == 1) {
        Ones($number, 0);
    }
    if (strlen($number) == 2) {
        Two_number($number, 0);
    }
    if (strlen($number) == 3) {
        Hundreds($number, 0) . Two_number($number, 1);
    }
}
?>
</body>
</html>