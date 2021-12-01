<?php
$conn = new mysqli("localhost","root","","hf7");

if (mysqli_connect_errno()) {
    echo "csatlakozasi hiba az adatbazishoz: " . mysqli_connect_error();
    exit();
}