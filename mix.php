<?php

require_once 'header_mix.php';
require_once 'lib/Mathematic.php';

if (isset($_GET['res'])) {
    // form submitted
    $math = new Mathematic();
    $res = $math->mix($_GET['a'], $_GET['b'], $_GET['c']);
    if ($res == $_GET['res']) {
        echo "super
        </br>
        </br>
        </br>
        </br>
        <img src='/image/chudik2.png' height='70%' alt='chudik'>
        ";

    } else {
        echo "you made a mistake :( correct answer: $res
        </br>
        </br>
        </br>
        </br>
        <img src='/image/chudik4.png' height=70%' alt='chudik'>
        ";
        echo ShowPic::picWrong();
    }
} else if (!isset($_GET['res'])) {
    // form not submitted
    $a = mt_rand(1, 9);
    $b = mt_rand(1, (10 - $a));
    $c = mt_rand(1, 10);
    echo "($a + $b) * $c=";
    ?>

    <form action='mix.php' method='GET'>
        <input type="hidden" name='a' value="<?php echo $a ?>"/>
        <input type="hidden" name='b' value="<?php echo $b ?>"/>
        <input type="hidden" name='c' value="<?php echo $c ?>"/>
        <input type='number' name='res' placeholder='input result' autofocus/>
        <input type='submit' value='check result'/>
    </form>
    </br>
    <img src='/image/chudik1.png' height="70%" alt='chudik'>

    <?php
}