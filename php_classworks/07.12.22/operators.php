<ul>
<?php

//echo $i; Error before definition of i

for ($i = 0; $i < 5; $i++){
    ?>
    <li><?=$i; ?></li>
    <?php
}

echo $i;
?>
</ul>
<?php

//$sv = 1;
//
//echo match ($sv) {
//    "1" => "1-2",
//    1 => "1",
//    "2" => "2",
//    default => "default",
//};