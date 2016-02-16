<?php

require_once 'header_plusminus.php';
require_once 'lib/Mathematic.php';

if (isset($_GET['res'])) {
    // form submitted
    $math = new Mathematic();
    $res = $math->plusminus($_GET['a'], $_GET['b'], $_GET['c']);
    if ($res == $_GET['res']) {
        echo "super";

    } else {
        echo "you made a mistake :( correct answer:$res";
    }
} else if (!isset($_GET['res'])) {
    // form not submitted
    $a = mt_rand(1, 10);
    $b = mt_rand(1, 10);
    $c = mt_rand(1, $a);

    echo "$a + $b - $c =";
    ?>

    <form action='plusminus.php' method='GET'>
        <input type="hidden" name='a' value="<?php echo $a ?>"/>
        <input type="hidden" name='b' value="<?php echo $b ?>"/>
        <input type="hidden" name='c' value="<?php echo $c ?>"/>
        <input type='number' name='res' placeholder='input result' autofocus/>
        <input type='submit' value='check result'/>
    </form>

<?php } ?>