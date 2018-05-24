<?php
session_start();
include '../dbh.php';


$first = $_POST['first'];
$last = $_POST['last'];
$usr = $_POST['usr'];
$pwd = $_POST['pwd'];

if (!empty($first)) {
    echo header('Location: ../index.php?error=blank');
    exit();
}
if (!empty($last)) {
    echo header('Location: ../index.php?error=blank');
    exit();
}
if (!empty($usr)) {
    echo header('Location: ../index.php?error=blank');
    exit();
}
if (!empty($pwd)) {
    echo header('Location: ../index.php?error=blank');
    exit();
}
if (!empty($first) && (!empty($last)) && (!empty($usr)) && (!empty($pwd))) {
    echo header('Location: ../index.php?error=blank');
    exit();
}
 else {
    $sql = ("INSERT INTO users (first, last, usr ,pwd) VALUES ('$first', '$last','$usr','$pwd')");
    //send the data to database
    $results = $conn->query($sql);
}




//redirect to index.php
header('Location: ../index.php');