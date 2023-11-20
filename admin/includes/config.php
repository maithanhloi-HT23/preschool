<?php
//time zone
date_default_timezone_set("Asia/Ho_Chi_Minhk");
//database connection
$con=mysqli_connect("localhost","loi_user","Abc@#$234^^^XXD","preschooldb");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

  ?>
