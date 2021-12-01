<?php
require_once "adatbazis.php";
if (isset($conn)) {
    $conn;
}

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $image = $_POST['image'];
    $id = $_POST['id'];

    $sql = "UPDATE product SET $title='$$title', price='$price', category='$category', image='$image'  where id='$id'";

    $result = $conn->query($sql);
    header("Location: listazas.php");
} else {

    $sql = "SELECT * FROM product WHERE id=" . $_GET['id'];
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $conn->close();
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    title:<input type="Text" name="title" value="<?php echo $row["title"]; ?>"><br>
    price:<input type="Text" name="price" value="<?php echo $row["price"]; ?>"><br>
    category:<input type="Text" name="category" value="<?php echo $row["category"]; ?>"><br>
    image: <input type="Text" name="image" value="<?php echo $row["image"]; ?>"><br>
    <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
    <input type="Submit" name="submit" value="Elkuld">
</form>