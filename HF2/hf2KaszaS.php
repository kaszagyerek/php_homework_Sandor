<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
</head>

<body>
<?php // 1 feladat
/*Az alábbi tömb, minden elemének írassuk ki a típusát és ha numerikus az „Igen” szót, különben
„Nem”. (gettype, is_numeric függvények) */

$data = array(5, '5', '05', '12.3', '16.7', 'five', '0xDECAFBAD', '10e200');
foreach ($data as $item) {
    if (is_numeric($item)) {
        echo $item . "-->" . gettype($item) . "--> Igen " . "<br>";


    } else {
        echo $item . "-->" . gettype($item) . "--> Nem " . "<br>";


    }

}

?>

<?php //2feladat
/*Az alábbi asszociatív tömböt felhasználva állítsuk elő a következő kimenetet: */
echo "<br>";
$orszagok = array(" Magyarország " => " Budapest", " Románia" => " Bukarest",
    "Belgium" => "Brussels", "Austria" => "Vienna", "Poland" => "Warsaw");
foreach ($orszagok as $orsz => $fovaros) {
    echo $orsz . " főváros " . $fovaros . "<br>";
}
?>

<?php // 3 feladat 	A $napok kétdimenziós tömböt írasd ki az alábbi formában:
$napok = array(
    "HU" => array("H", "K", "Sze", "Cs", "P", "Szo", "V"),
    "EN" => array("M", "Tu", "W", "Th", "F", "Sa", "Su"),
    "DE" => array("Mo", "Di", "Mi", "Do", "F", "Sa", "So"),
);
echo "<br>";
$keys = array_keys($napok);
for ($i = 0; $i < count($napok); $i++) {
    echo "<b>" . $keys[$i] . ":<b/>";
    foreach ($napok[$keys[$i]] as $value) {
        echo "<b> " . $value . ",</b>";
    }
    echo "<br>";
}
?>

<?php // 4 feladat Írjunk függvényt, amely egy asszociatív tömb elemeit átalakítja kisbetűs vagy nagybetűs formára.
echo "<br>";

$szinek = array('A' => 'Kek', 'B' => 'Zold', 'c' => 'Piros');

$megyen = function (array $lista, string $milyen) use ($szinek) {

    foreach ($szinek as $betu => $szin) {

        if ($milyen == "kicsi") {
            echo "eredeti " . $betu . " -> " . $szin . "";

            $szin = strtolower($szin);
            echo "<br> kisebtu" . $betu . " -> " . $szin . "";

            echo "<br>";
            echo "<br>";

        } else if ($milyen == "nagy") {
            echo "eredeti " . $betu . " -> " . $szin . "";

            $szin = strtoupper($szin);
            echo "<br> nagybetu" . $betu . " -> " . $szin . "";

            echo "<br>";
            echo "<br>";
        }
    }
};

echo $megyen($szinek, "nagy");
echo $megyen($szinek, "kicsi");

?>


</body>
</html>