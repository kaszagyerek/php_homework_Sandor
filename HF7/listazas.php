<?php
require_once "adatbazis.php";

$sql = "SELECT * FROM product";
if (isset($conn)) {
    $results = $conn->query($sql);

    echo "<br>" . "<a href='listazas.php'>uj termek </a>" . "<br><br>";

    if ($results->num_rows > 0) {
        echo "<table border='1'>";
        while ($row = $results->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['category'] . "</td>";
            $src = $row['image'];
            echo "<td>" . "<img src= '$src' height='50px'>" . "</td>";
            echo "<td><a href = \"frisittes.php.php?id=" . $row['id'] . "\">Update</a></td>";
            echo "<td><a href = \"torles.php?id=" . $row['id'] . "\">Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo 'Üres a tábla!';
    }

    $conn->close();
}