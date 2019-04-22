<?php

   $minspeed = '3';

    $id = $_GET["d"];
    $lat = $_GET["f_a"];
    $lon = $_GET["f_o"];
    $speed = $_GET["f_s"];
    $hdg = $_GET["f_h"];
    $t = $_GET["t"];
    $b = $_GET["b"];
    
   
// if (1==1) { // Tudo
if (!($speed>'90' or $speed<'0' or $hdg>'360' or $hdg<'0' or $lat>'90' or $lat<'-90' or $lon>'180' or $lon<'-180')) { // TODO O PLANETA
// if (!($speed>'90' or $speed<'0' or $hdg>'360' or $hdg<'0' or $lat>'51' or $lat<'10' or $lon>'-39' or $lon<'-163')) { // USA
// if (!($speed>'90' or $speed<'0' or $hdg>'360' or $hdg<'0' or $lat>'40' or $lat<'10' or $lon>'-65' or $lon<'-105')) { // FLORIDA

echo "K";

// ATUALIZA FREEDOM

// $output = shell_exec('curl --data "id='.$id.'&lat='.$lat.'&lon='.$lon.'&heading='.$hdg.'&speed='.$speed.'" http://45.55.241.220:5055');

$output = shell_exec('curl --data "batteryLevel='.$b.'&id='.$id.'&lat='.$lat.'&lon='.$lon.'&heading='.$hdg.'&speed='.$speed.'" http://traccar.freedomgpstracker.com:5055');

// $output = shell_exec('curl --data "d='.$id.'&f_a='.$lat.'&f_o='.$lon.'&f_h='.$hdg.'&b='.$b.'&f_s='.$speed.'" http://waterprooftracker.com/post/w.php');

// FIM ATUALIZA FREEDOM


}
else
{
  echo "E";
}


?>