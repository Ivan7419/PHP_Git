<?php
//Task 5
$vik = [
    [
        'text' => ' Capital of France:',
        'type' => 'radio',
        'answers' => [
            'Kyiv',
            'Paris',
            'London',
            'Washington'
        ]
    ],
    [
        'text' => ' Cities of Ukraine:',
        'type' => 'check',
        'answers' => [
            'Kyiv',
            'Odessa',
            'Berlin',
            'Mykolaiv'
        ]
    ],
    [
        'text' => ' What is PHP? ',
        'type' => 'textarea',
    ]
];
?>

<pre>
<?php
// var_dump($vik);
?>
</pre>

<form method="<?=$_SERVER['PHP_SELF'];?>">
    <?php
    foreach ($vik as $q) {
        echo "<p>" . $q['text'] . "</p>";
        switch ($q['type']) {
            case 'radio':
                foreach ($q['answers'] as $a) {
                    echo "<label><input type='radio' name='1' > $a </label>";
                }
                break;
            case 'check':
                foreach ($q['answers'] as $a) {
                    echo "<label><input type='checkbox' > $a </label>";
                }
                break;
            case 'textarea':
                echo "<textarea></textarea>";
                break;
            default:
                echo "<p> Error type </p>";
        }
    }
    ?>
</form>