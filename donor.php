<?php

$CampDir = ".";
require_once($CampDir . '/config.php');
require_once($CampDir . '/settings.php');

function get_input($var) {
    return (isset($_REQUEST[$var]) ? (($_REQUEST[$var] != "") ? $_REQUEST[$var] : NULL) : NULL); 
}

function authorize() {
    $salt = "Raktarpan";
    $safety = array(md5($salt.'Hrishikesh'), md5($salt.'BloodDonationCamp'), md5($salt.'Shubhangi'));


    if (! in_array(get_input('auth'), $safety)) {
        die('<title>Denied</title><h1>Unauthorized Access</h1>');
    }

}

$question_array = array();

for($i = 1; $i < 15; $i++) {
    array_push($question_array, "Q".$i."-". get_input('q'.$i));
}

$question_answers = implode($question_array, ", ");

$hostel = get_input('hostel');
$room = get_input('room');
$address = get_input('address');

if ($hostel != "NA") {
    $address = $room." / ".$hostel;
}


$donor_array = array ( 
    //		"CampId" => get_input('cid'),
    "CampId" => $CampId,
    "Name" => get_input('name'),
    "Roll" => get_input('number'),
    "Gender" => get_input('gender'),
    "Phone" => get_input('phone_no'),
    "Age" => get_input('age'),
    "BloodGroup" => get_input('blood_group'),
    "Address" => $address,
    "Hostel" => $hostel,
    "Email" => get_input('email'),
    "Source" => get_input('source'),
    "Medical" => $question_answers,
);

// DB::insert('donor', $donor_array);
?>
<head>
    <title>Thank You!</title>
    <link href="<?php echo $CampDir; ?>/css/submit.css" rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Lobster|Pacifico:400,700,300|Roboto:400,100,100italic,300,300italic,400italic,500italic,500' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,500,600,700,300' rel='stylesheet' type='text/css'>
</head>
<body>
 <header>
 <center><img class="header_image" src="<?php echo $CampDir; ?>/images/rakt.png"></center>
  </header>
<div class="content">
<h1>Congratulations <?php echo $donor_array["Name"]; ?>!</h1>
<div class="congrats">
        You are about to save <b>three</b> lives!<br>
</div>
<hr>
<h2>Procedure</h2>
<ol>
    <li>Please write your Name and Mobile Number on the paper form.</li>
    <li>Carry this form with you and proceed for check-up.</li>
    <li>Once check-up is done and you are cleared for donation, you will be given a blood-bag.</li>
    <li>If there is a queue, please wait in the queue till your turn</li>
    <li>Proceed for donation. It will take roughly 10-15 minutes</li>
    <li>After donation, please continue to lie down for 5-10 more minutes.</li>
    <li>You will now be provided refreshments.</li>
    <li><b>Great Job! You're a hero!</b></li>
</ol>

<hr>

<h2>Helpline</h2>

<p>We maintain 24x7 helpline to provide blood to the needy.<br>
 If you or your friends are ever in need of the blood, feel free to call on this and we will try our best to help you out.</p>

<h2>+91 8882 982 982</h2>

<h4>~ Raktarpan Team</h4>

<hr>

    <div class="footer">
    <a href="<?php echo $CampDir; ?>">Form</a> | <a href="<? echo $CampDir; ?>/live">Live Statistics</a>
    </div>
</div>
</body>
