<?php
require_once "adatbazis.php";
if (isset($conn)) {
    $conn;
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM product WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        //echo "Record deleted successfully";
        header("Location: listazas.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();