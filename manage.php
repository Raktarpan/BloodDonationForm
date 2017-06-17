<?php

$CampDir = ".";

require_once($CampDir . '/config.php');
require_once($CampDir . '/settings.php');

$Fields = array("Id", "Name", "Gender", "Age", "Email", "Phone", "BloodGroup", "BloodPressure", "Hb", "Weight", "Pulse", "Fit", "Emergency", "CampRating");
$Donors = DB::query("SELECT Id, Name, Gender, Age, Email, Phone, BloodGroup, BloodPressure, Hb, Weight, Pulse, Fit, Emergency, CampRating FROM donor_new WHERE CampId = %i", $CampId);

$Table = "<table>";
$Table .= "<tr>";
foreach($Fields as $header) {
    $Table .= "<th>". $header . "</th>";
}
$Table .= "</tr>";
foreach ($Donors as $donor) {

    $Table .= "<tr id='".$donor['Id']."' class='edit_tr'>";

    $Table .= "<td id='Id'>";
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

    $Table .= "<td class='edit_td'>";
    $Table .= "<span id='BloodPressure_". $donor['Id'] ."' class='text'>". $donor['BloodPressure'] . "</span>";
    $Table .= "<input id='BloodPressure_input_". $donor['Id'] ."' type='text' class='editbox' name='BloodPressure' value=".$donor['BloodPressure'].">";
    $Table .= "</td>";

    $Table .= "<td class='edit_td'>";
    $Table .= "<span id='Hb_". $donor['Id'] ."' class='text'>". $donor['Hb'] . "</span>";
    $Table .= "<input id='Hb_input_". $donor['Id'] ."' type='text' class='editbox' name='Hb' value=".$donor['Hb'].">";
    $Table .= "</td>";

    $Table .= "<td class='edit_td'>";
    $Table .= "<span id='Weight_". $donor['Id'] ."' class='text'>". $donor['Weight'] . "</span>";
    $Table .= "<input id='Weight_input_". $donor['Id'] ."' type='text' class='editbox' name='Weight' value=".$donor['Weight'].">";
    $Table .= "</td>";

    $Table .= "<td class='edit_td'>";
    $Table .= "<span id='Pulse_". $donor['Id'] ."' class='text'>". $donor['Pulse'] . "</span>";
    $Table .= "<input id='Pulse_input_". $donor['Id'] ."' type='text' class='editbox' name='Pulse' value=".$donor['Pulse'].">";
    $Table .= "</td>";

    $Table .= "<td class='edit_td'>";
    $Table .= "<span id='Fit_". $donor['Id'] ."' class='text'>". ($donor['Fit'] ? "Yes" : "No") . "</span>";
    $Table .= "<input id='Fit_input_". $donor['Id'] ."' type='checkbox' class='editcheckbox' name='Fit' ". ($donor['Fit'] ? "checked" : "") . ">";
    $Table .= "</td>";

    $Table .= "<td class='edit_td'>";
    $Table .= "<span id='Emergency_". $donor['Id'] ."' class='text'>". ($donor['Emergency'] ? "Yes" : "No"). "</span>";
    $Table .= "<input id='Emergency_input_". $donor['Id'] ."' type='checkbox' class='editcheckbox' name='Emergency' ". ($donor['Emergency'] ? "checked" : "") . ">";
    $Table .= "</td>";

    $Table .= "<td class='edit_td'>";
    $Table .= "<span id='CampRating_". $donor['Id'] ."' class='text'>". $donor['CampRating'] . "</span>";
    $Table .= "<input id='CampRating_input_". $donor['Id'] ."' type='text' class='editbox' name='CampRating' value=".$donor['CampRating'].">";
    $Table .= "</td>";

    $Table .= "</tr>";
}

$Table .= "</table>";
?>
<head>
<title>&bull; Raktarpan &bull; Manage Donor Details &bull;</title>
<link type="text/css" rel="stylesheet" href="<? echo $CampDir; ?>/css/manage.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $(".edit_tr").click(function() {
        var ID = $(this).attr('id');
        $("#BloodPressure_" + ID).hide();
        $("#Hb_" + ID).hide();
        $("#Weight_" + ID).hide();
        $("#Pulse_" + ID).hide();
        $("#Fit_" + ID).hide();
        $("#Emergency_" + ID).hide();
        $("#CampRating_" + ID).hide();

        $("#BloodPressure_input_" + ID).show();
        $("#Hb_input_" + ID).show();
        $("#Weight_input_" + ID).show();
        $("#Pulse_input_" + ID).show();
        $("#Fit_input_" + ID).show();
        $("#Emergency_input_" + ID).show();
        $("#CampRating_input_" + ID).show();
    }).change(function(){
        var ID = $(this).attr('id');
        var BloodPressure = $("#BloodPressure_input_" + ID).val();
        var Hb = $("#Hb_input_" + ID).val();
        var Weight = $("#Weight_input_" + ID).val();
        var Pulse = $("#Pulse_input_" + ID).val();
        var Fit = $("#Fit_input_" + ID).is(':checked') ? 1 : 0;
        var Emergency = $("#Emergency_input_" + ID).is(':checked') ? 1 : 0;
        var CampRating = $("#CampRating_input_" + ID).val();

        var dataString = 'Id=' + ID + '&BloodPressure=' + BloodPressure + '&Hb=' + Hb + '&Weight=' + Weight + '&Pulse=' + Pulse + '&Fit=' + Fit + '&Emergency=' + Emergency + '&CampRating=' + CampRating;

        // Loading Image
        // $("#" + ID).html('<img src="images/loading.gif" />');

        // alert(dataString);
        $.ajax({
        type: "POST",
            url: "ajax_update.php",
            data: dataString,
            cache: false,
            success: function(html) {
                $("#BloodPressure_" + ID).html(BloodPressure);
                $("#Hb_" + ID).html(Hb);
                $("#Weight_" + ID).html(Weight);
                $("#Pulse_" + ID).html(Pulse);
                $("#Fit_" + ID).html(Fit ? "Yes" : "No");
                $("#Emergency_" + ID).html(Emergency ? "Yes" : "No");
                $("#CampRating_" + ID).html(CampRating);
            }
        });
    });

    // Edit input box click action
    $(".editbox").mouseup(function() {
        return false
    });

    // Outside click action
    $(document).mouseup(function() {
        $(".editbox").hide();
        $(".editcheckbox").hide();
        $(".text").show();
    });

    // Enter/Escape click action
    $(document).keyup(function(e) {
        if ((e.keyCode == 13) || (e.keyCode == 27)) {
            $(".editbox").hide();
            $(".editcheckbox").hide();
            $(".text").show();
        }
    }); 
});
</script>
</head>
<body>
<?

echo $Table;

?>
</body>
