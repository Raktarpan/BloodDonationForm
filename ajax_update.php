<?php

$CampDir = ".";

require_once($CampDir . '/config.php');
require_once($CampDir . '/settings.php');

function get_input($var) {
   return (isset($_REQUEST[$var]) ? (($_REQUEST[$var] != "") ? $_REQUEST[$var] : NULL) : NULL); 
}

DB::update('donor_new', array(
    'BloodPressure' => get_input('BloodPressure'),
    'Hb' => get_input('Hb'),
    'Weight' => get_input('Weight'),
    'Pulse' => get_input('Pulse'),
    'Fit' => get_input('Fit'),
    'Emergency' => get_input('Emergency'),
    'CampRating' => get_input('CampRating')
), "Id=%s", get_input('Id'));

$counter = DB::affectedRows();

echo $counter;

?>
