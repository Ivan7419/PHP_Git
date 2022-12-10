<pre>
<?php

function funName1 (string $funArg){
    echo "in Fun ";
    var_dump($funArg);
    return $funArg;
}

echo "now => ";
funName1(true);
echo "\n\n";

function funName ($funArg){
    return $funArg;
}


var_dump(funName(1)); echo "\n\n";
var_dump(funName("1")); echo "\n\n";
var_dump(funName([1,2,3])); echo "\n\n";
var_dump(funName(true)); echo "\n\n";
var_dump(funName(1.5)); echo "\n\n";
var_dump(funName(null)); echo "\n\n";
?>
</pre>
