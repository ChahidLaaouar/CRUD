<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studenten";


$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);
