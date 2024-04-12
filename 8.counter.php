<?php
    session_start();
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"]=1;
    else
        $_SESSION["counter"]++;
         //if...else 语句 - 在条件成立时执行一块代码，条件不成立时执行另一块代码
    echo "counter=".$_SESSION["counter"];
    echo "<br><a href=9.reset_counter.php>重置counter</a>";
?>
