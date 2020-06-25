<?php

session_start();
header('location:login.php'); //directs registration to the login page

$con = mysqli_connect('localhost', 'root', 'project', 'userregisteration'); //linking to the database

mysqli_select_db($con, 'userregistration'); //select the database necessary

$name = $_POST['user']; //stores the username for this form in the name variable
$pass = $_POST['password']; //stores the password

$s = "select * from usertable where name = '$name'"; //tablename assigned

$result = mysqli_query($con, $s); //result variable where it will store the query

$num = mysqli_num_rows($result); //will count the number of rows - how many time the name has appeared on the database table

if ($num == 1) {
    echo "Username Already Taken";
} else {
    $reg= "insert into usertable(name, password) values ('$name', '$pass')";
    mysqli_query($con, $reg);
    echo "Registration Successful";
}

// Security measures
$salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647));
$pass = hash('sha256', $_POST['password'] . $salt);
for ($round = 0; $round < 65536; $round++) {
    $pass = hash('sha256', $pass . $salt);
}
$query_params = array(
    ':user' => $_POST['user'],
    ':password' => $pass,
    ':salt' => $salt,
    
);
try {
    $stmt = $db->prepare($query);
    $result = $stmt->execute($query_params);
} catch (PDOException $ex) {
    die("Failed to run query: " . $ex->getMessage());
}
header("Location: index.php");
die("Redirecting to index.php");
