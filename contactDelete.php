<?php
$dbname = "address_book";
$conn = mysqli_connect("localhost", "root", "", $dbname);

if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}
$fname = $_POST['fname'];
$sql = "DELETE FROM contacts WHERE fname='$fname'";

if ($conn->query($sql) === TRUE) {
    echo "Successfully";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
header('Location:index.php'); //Ana sayfaya geri yönlendir. Eğer olmazsa sadece Successfully yazan boş sayfada kalıyor.
?> 