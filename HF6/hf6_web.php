<?php
session_start();
/*https://www.php.net/manual/en/function.strpos.php */
/*https://www.w3schools.com/php/php_sessions.asp*/

if (isset($_POST['elkuldott'])) {
        if (!isset($result) || !isset($_SESSION['randomszam'])) {
            if (!isset($_SESSION['randomszam'])) {
                $_SESSION['randomszam'] = rand(1, 10);
            }
            echo $result = hasonlit($_POST['talalgatas'], $_SESSION['randomszam']);

            if (strpos($result, 'Talalt') !== false) {
                session_destroy();            }
        } else {
            $_SESSION['randomszam'] = rand(1, 10);
        }

}

function hasonlit($megadottszam, $randomszam)
{
    try{
        if (is_numeric($randomszam) && is_numeric($megadottszam)) {
            return $randomszam < $megadottszam ? " a szam kisebb mint $megadottszam!" : ($randomszam > $megadottszam ?
                "a szam nagyobb mint $megadottszam" : "talalt a szam " . $randomszam );
        }
    }
    catch (Exception $e){
        echo $e->getMessage();

    }
    return 0;

}

?>

<form method="POST" action="">
    <input type="hidden" name="elkuldott" value="true">
    Melyik számra gondoltam 1 és 10 között?
    <input name="talalgatas" type="text">
    <br>
    <br>
    <input type="submit" value="Elküld">
</form>
