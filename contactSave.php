<?php

$dbname = "address_book";
$conn = mysqli_connect("localhost", "root", "", $dbname);

if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$homePhone = $_POST['homePhone'];
$cellPhone = $_POST['cellPhone'];
$officePhone = $_POST['officePhone'];
$address = $_POST['address'];
$comment = $_POST['comment'];

$sql = "INSERT INTO contacts (lname,fname,email,homePhone,cellPhone,officePhone,address,comment)"
        ."VALUES('" . $lname . "' , '" . $fname . "' , '" . $email . "' , '" . $homePhone . "' , '" . $cellPhone . "' , '" . $officePhone . "' , '" . $address . "' , '" . $comment . "')";

if ($conn->query($sql) === TRUE) {
    echo "Successfully";
} else {
    echo "Error: ".$conn->error;
}
$conn->close(); // last opened database is closed.
header('Location:index.php'); //Ana sayfaya geri yönlendir. Eğer olmazsa sadece Successfully yazan boş sayfada kalıyor.
?> 