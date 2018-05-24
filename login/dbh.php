<?php

$conn = mysqli_connect("localhost", "root", "","school");

if(!$conn){
    die("No connection: ".mysqli_connect_error());
}