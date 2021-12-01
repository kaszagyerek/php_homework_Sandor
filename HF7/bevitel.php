<?php
require_once "adatbazis.php";

?>
<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        if (isset($conn)) {
            $conn;
        }
        if (isset($_POST['submit'])) {
            $title = $_POST['title'];
            $price = $_POST['price'];
            $category = $_POST['category'];
            $image = $_POST['image'];
            // Create connection

            $sql = "INSERT INTO product (title, price, category, image) VALUES ('$title', '$price','$category', '$image')";

            if ($conn->query($sql) === TRUE) {
                $conn->close();
                echo "Köszönjük! Az adatokat elmentettük.<br>";
                echo "<a href='bevitel.php'>Uj adat</a><br>";
                echo "<a href='listazas.php'>Adatok listazasa</a><br>";
            }else{
                echo "Muveleti hiba.\n";
            }
        }
        ?>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                title: <input type="Text" name="title"><br>
                price: <input type="Text" name="price"><br>
                category: <input type="Text" name="category"><br>
                image: <input type="Text" name="image"><br>
                <input type="Submit" name="submit" value="Elkuld">
            </form>


    </body>
</html>
