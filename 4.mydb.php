<?php
    #mysqli_connect() 建立資料庫連結
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");  //变量以 $ 符号开始 
    #mysqli_query() 從資料庫查詢資料                                 
    $result=mysqli_query($conn, "select * from user");
    #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
    $row=mysqli_fetch_array($result);
    echo $row["id"] . " " . $row["pwd"]."<br>";   //echo - 可以输出一个或多个字符串
    $row=mysqli_fetch_array($result);
    echo $row["id"] . " " . $row["pwd"];
?>
