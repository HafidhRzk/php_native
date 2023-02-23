<?php
$connection = mysqli_connect("localhost", "root", "root", "todo_list");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
