<html>
<head>
    <title>DZ_2</title>
    <style>
        .depositRowHeader{
            background: red;
        }

        .depositRow{
            background: grey;
            color: white;
        }


    </style>
</head>
<body>
    <?php

    //Task1

    $tmp = rand(0, 100);
    $min = $tmp;
    $max = $tmp;

    for ($i = 0; $i < 100; $i++) {
        $tmp = rand(1, 99);
        if ($tmp > $max) $max = $tmp;
        if ($tmp < $min) $min = $tmp;
        echo "$tmp ";
    }
    echo "<br><br>";
    echo "Max = $max<br>";
    echo "Min = $min<br><br><br>";


    //Task 2
    $dir = 'images/';
    $cols = 3;
    $files = scandir($dir);
    echo "<table>";
    $k = 0;
    for ($i = 0; $i < count($files); $i++) {
        if (($files[$i] != ".") && ($files[$i] != "..")) {
            if ($k % $cols == 0) echo "<tr>";
            echo "<td>";
            $path = $dir.$files[$i];
            echo "<img src='$path' alt='' width='100' />";
            echo "</td>";
            if ((($k + 1) % $cols == 0) || (($i + 1) == count($files))) echo "</tr>";
            $k++;
        }
    }
    echo "</table><br><br>";


    //Task 3
    echo "<table>";
    for($i = 1; $i < 10; $i++)
    {
        if($i == 0 || $i == 5)echo "<tr>";
        echo "<td><table>";
        for($j = 0; $j < 10; $j++)
        {
            echo "<tr><td>";
            echo $i+1 . " * " . $j+1 . " = " . ($j+1)*($i+1);
            echo "</td></tr>";
        }
        echo "</table></td>";
        if($i == 0 || $i == 4) echo "</tr>";
    }
    echo "</table><br><br>";

    //Task 4
    $sum = 300;
    $percentage = 20;

    echo "<table><tr class='depositRowHeader'>";
    echo "<td>Year</td><td>Summ Start</td><td>Summ End</td><td>Profit</td>";
    echo "</tr>";
    for($i = 0; $i < 20; $i++)
    {
        echo "<tr class='depositRow'>";
        echo "<td>" . $i+1 . "</td>";
        echo "<td>$sum</td>";
        echo "<td>" . round(($sum+$sum/100*$percentage), 2) . "</td>";
        echo "<td>" . round($sum/100*$percentage, 2) . "</td>";
        echo "</tr>";
        $sum = round(($sum+$sum/100*$percentage), 2);
    }
    echo "</table><br><br>";


    //Task 5

    $num = 7856942;
    $x = 0;
    $n =$num;

    while(floor($num))
    {
        $mod = $num%10;
        $x = $x * 10 + $mod;
        $num = $num/10;
    }
    echo"<h1 style='color:red'>$n</h1>";
    echo"<h1 style='color:green'>$x</h1>";

    //Task 6
    $number = 841681;
    $digits = str_split($number);
    $maxDigit = $digits[0];
    $minDigit = $digits[0];
    $sumDigits = 0;

    echo "<h1></h1>";
    echo "<h2>Digits in number: ";
    foreach ($digits as $dig)
    {
        echo "$dig, ";
        if ($dig > $maxDigit) $maxDigit = $dig;
        if ($dig < $minDigit) $minDigit = $dig;
        $sumDigits += $dig;
    }
    echo "</h2>";

    echo "<p>Count of digits: " . count($digits) . ", Max: $maxDigit, Min: $minDigit, Summ: $sumDigits, AVG: " . round($sumDigits / count($digits), 2) . "</p>"

?>
</body>
</html>
