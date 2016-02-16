<?php

require_once 'config.php';
require_once 'header.php';
require_once 'lib/Mathematic.php';

if (isset($_GET['res'])) {
    // form submitted
    $math = new Mathematic();
    $res = $math->multiple($_GET['a'], $_GET['b']);
    if ($res == $_GET['res']) {
        echo ANSWER_TEXT_CORRECT;
    } else {
        echo ANSWER_TEXT_WRONG . " $res";
    }
} else if (!empty($_GET['b'])) {
    // form not submitted
    $a = mt_rand(1, 10);
    $b = $_GET['b'];

    echo "$a * $b =";
    ?>

    <form action='/' method='GET'>
        <input type="hidden" name='a' value="<?php echo $a ?>"/>
        <input type="hidden" name='b' value="<?php echo $b ?>"/>
        <input type='number' name='res' placeholder='input result' autofocus/>
        <input type='submit' value='check result'/>
    </form>

<?php }





