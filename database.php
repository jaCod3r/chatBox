<?php 

//connect to my sql

$con = mysqli_connect("localhost", "root", "123456789", "jsshoutbox");

if (mysqli_connect_errno()) {
    echo 'Failed to connect: ' .mysqli_connect_error();
}
