<?php
//Task 1-2
$name = "Jack";
$age = 46;

echo "Hello! My name is '$name' <br> I’m $age <br><br>";



//Task 3
$a = 23;
$b = 89;

echo "$a + $b = " . $a+$b . "<br><br>";



//Task 4
echo "Before swap: <br> a = $a <br> b = $b<br><br>";
$a=$a+$b;
$b=$a-$b;
$a=$a-$b;
echo "After swap: <br> a = $a <br> b = $b<br><br>";



//Task6
$background_color = "blue";
$color = "red";
$width = "100px";
$height = "100px";

$tag = "<div style='background-color:$background_color; color:$color; width:$width; height:$height;'>Hello</div>";

echo "background-color: $background_color <br> color: $color <br> width: $width <br> height: $height <br> $tag";