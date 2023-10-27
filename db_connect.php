<?php
 $conn = mysqli_connect("localhost", "root", "", "db_sms");
 if(!$conn)
 {
    die("connection failed". mysqli_connect_error());
 }
//  echo "Connect sucess";