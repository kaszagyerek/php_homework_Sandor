<?php

 /* https://stackoverflow.com/questions/13045279/if-isset-post inenn vettem az ötletet */

/*https://stackoverflow.com/questions/14758191/how-to-use-filesfilesize/14758827 iienen a fajl meret ellenorzes  */
    if(isset($_POST['submit']))
{
    $valid_formats = array("application/pdf");
    define('KB', 1024);
    define('MB', 1048576);
    define('GB', 1073741824);
    define('TB', 1099511627776);


    if ( (isset($_POST['firstName']) && $_POST['firstName'] !== '') &&

        (isset($_POST['lastName']) && $_POST['lastName'] !== '') &&

        (isset($_POST['email']) && $_POST['email'] !== '') &&

        isset($_POST['attend']) &&
        $_FILES['abstract']['error'] == 0 && $_FILES['abstract']['size'] < 5* MB && in_array($_FILES['abstract']['type'], $valid_formats)

        && isset($_POST['terms']))

    {
        echo "<p>" . "sikeres ürlap" . "</p>";

        echo  "<p>" ."first name" . $_POST['firstName'] . "</p>";

        echo  "<p>" . "last name" . $_POST['lastName'] . "</p>";

        echo  "<p>" . "email" . $_POST['email'] . "</p>";

        foreach ($_POST['attend'] as $atte) {
            echo $atte . " ";
        }
        echo "<br>";
        if (isset($_POST['tshirt'])) {
            if ($_POST['tshirt'] == "P")
                echo "T-Shirt size: Not selected<br>";
            else
                echo "T-Shirt size: " . $_POST['tshirt'] . "<br>";
        }
        echo "Abstract: " . $_FILES['abstract']['name'] . "<br>";


    }
        else
        {
            echo "valami rossz ";
            if(!(isset($_POST['email']) && $_POST['email']!==''))
            {
                echo "ures vagy rossz formatumu mail cim ";
            }

            if(!(isset($_POST['firstName']) && $_POST['firstName']!==''))
            {
                echo " vezetek nev nem jo / ures";
            }
            if(!(isset($_POST['lastName']) && $_POST['lastName']!==''))
            {
                echo  "keresztnev nem jo / ures";
            }
            if(!( isset($_POST['attend'])))
            {
                echo "event nincs kivalasztva";

            }
            if(!( isset($_POST['abstract']['error']) && $_FILES['abstract']['size'] < 5*MB))
            {
                echo "problema a fajl meretevel vagy nincs fajl";
            }
            if(!( isset($POST['terms']))){
              echo "oldal feltelei nem fogadta el ";
            }

        }

}


?>



<h3>Online conference registration</h3>

<form method="post" action="" ENCTYPE="multipart/form-data">
    <label for="fname"> First name:
        <input type="text" name="firstName">
    </label>
    <br><br>
    <label for="lname"> Last name:
        <input type="text" name="lastName">
    </label>
    <br><br>
    <label for="email"> E-mail:
        <input type="text" name="email">
    </label>
    <br><br>
    <label for="attend"> I will attend:<br>
        <input type="checkbox" name="attend[]" value="Event1">Event 1<br>
        <input type="checkbox" name="attend[]" value="Event2">Event2<br>
        <input type="checkbox" name="attend[]" value="Event3">Event2<br>
        <input type="checkbox" name="attend[]" value="Event4">Event3<br>
    </label>
    <br><br>
    <label for="tshirt"> What's your T-Shirt size?<br>
        <select name="tshirt">
            <option value="P">Please select</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
        </select>
    </label>
    <br><br>
    <label for="abstract"> Upload your abstract<br>
        <input type="file" name="abstract"/>
    </label>
    <br><br>
    <input type="checkbox" name="terms" value="">I agree to terms & conditions.<br>
    <br><br>
    <input type="submit" name="submit" value="Send registration"/>
</form>
