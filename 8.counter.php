<?php
     //判斷session變數值，決定是否登入成功
    session_start(); //session = 啟動
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"]=1;
    else
        $_SESSION["counter"]++;
      //重整次數會增加
    echo "counter=".$_SESSION["counter"];
    echo "<br><a href=9.reset_counter.php>重置counter</a>";
     //瀏覽次數歸零
?>
