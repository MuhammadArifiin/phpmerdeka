<?php

$sname= "localhost";

$uname= "root";

$password = "";

$db_name = "loginp4";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {

    echo "Connection Failed!";

} else {

    echo "Connection Success!";
    
}
