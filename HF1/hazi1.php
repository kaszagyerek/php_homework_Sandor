<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<div>
  <?php // 1 feladat 
  switch ( date( 'w' ) ) {
      case 1:
          echo "Hétfő van";
          break;
      case 2:
          echo "Kedd van";
          break;
      case 3:
          echo "Szerda van";
          break;
      case 4:
          echo "Csütörtök van";
          break;
      case 5:
          echo "Péntek van";
          break;
      case 6:
          echo "Szombat van";
          break;
      case 0:
          echo "Vasárnap van";
          break;
  }
  ?>
</div>
<div>
  <?php // feladat 2 
  $szam1 = 12;
  $szam2 = 2;
  echo " Szam1=12 Szam2= 2 osszeadas " . $szam1 + $szam2 . " Kivonas " . $szam1 - $szam2 . " Osztás " . $szam1 / $szam2 . " Szorzás " . $szam1 * $szam2


      ?>
</div>
<div>
  <?php //feladat 3
  echo "1-10 osztható számok";
  for ( $i = 1; $i <= 10; $i++ ) {
      if ( $i % 2 == 0 ) {
          echo "  " . $i;
      }
  }
  ?>
</div>
<?php //feladat 4 
for ( $sor = 1; $sor <= 8; $sor++ ) {

 for ( $oszlop = 1; $oszlop <= 8; $oszlop++ ) {
        echo "  ";
          ;
        if ( ($sor + $oszlop) % 2 == 0 ) {
            echo " fekete ";
        } else {
            echo " fehér ";
        }
    }
    echo "<br>";
}

?>
</div>
	
<div>
	<?php //feladat 5
	  $nev = "Sandor";
	  for($i = 1 ; $i>strlen($nev); $i++){
         if(strlen($nev)%2==0){
   	 strtoupper($nev);
		 }
	  }
	echo $nev;
	?>
</div>
</body>
</html>