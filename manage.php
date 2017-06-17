<?php

$CampDir = ".";

require_once($CampDir . '/config.php');
require_once($CampDir . '/settings.php');

$Fields = array("Id", "Name", "Gender", "Age", "Email", "Phone", "BloodGroup", "BloodPressure", "Hb", "Weight", "Pulse", "Fit", "Emergency", "CampRating");
$Donors = DB::query("SELECT Id, Name, Gender, Age, Email, Phone, BloodGroup, BloodPressure, Hb, Weight, Pulse, Fit, Emergency, CampRating FROM donor WHERE CampId = %i", $CampId);

$Table = "<table>";
$Table .= "<tr>";
foreach($Fields as $header) {
    $Table .= "<th>". $header . "</th>";
}
$Table .= "</tr>";
foreach ($Donors as $donor) {

    $Table .= "<tr>";
    
    $Table .= "<td>";
    $Table .= $donor['Id'];
    $Table .= "</td>";
    
    $Table .= "<td>";
    $Table .= $donor['Name'];
    $Table .= "</td>";
         
    $Table .= "<td>";
    $Table .= $donor['Gender'];
    $Table .= "</td>";
   
    $Table .= "<td>";
    $Table .= $donor['Age'];
    $Table .= "</td>";
   
    $Table .= "<td>";
    $Table .= $donor['Email'];
    $Table .= "</td>";
   
    $Table .= "<td>";
    $Table .= $donor['Phone'];
    $Table .= "</td>";
   
    $Table .= "<td>";
    $Table .= $donor['BloodGroup'];
    $Table .= "</td>";
   
    $Table .= "<td>";
    $Table .= "<input id='bp' type='text' name='bp' value=".$donor['BloodPressure'].">";
    $Table .= "</td>";

    $Table .= "<td>";
    $Table .= "<input id='hb' type='text' name='hb' value=".$donor['Hb'].">";
    $Table .= "</td>";

    $Table .= "<td>";
    $Table .= "<input id='wt' type='text' name='wt' value=".$donor['Weight'].">";
    $Table .= "</td>";

    $Table .= "<td>";
    $Table .= "<input id='pulse' type='text' name='pulse' value=".$donor['Pulse'].">";
    $Table .= "</td>";

    $Table .= "<td>";
    $Table .= "<input id='fit' type='checkbox' name='fit' ". ($donor['Fit'] ? "checked" : "") . ">";
    $Table .= "</td>";

    $Table .= "<td>";
    $Table .= "<input id='emergency' type='checkbox' name='emergency' ". ($donor['Emergency'] ? "checked" : "") . ">";
    $Table .= "</td>";

    $Table .= "<td>";
    $Table .= "<input id='rating' type='text' name='rating' value=".$donor['CampRating'].">";
    $Table .= "</td>";

    $Table .= "</tr>";
}

$Table .= "</table>";

echo $Table;

?>
