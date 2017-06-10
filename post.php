<head>
    <title>Thank You!</title>
    <link href="css/submit.css" rel='stylesheet' type='text/css'>
</head>
<?php

require_once('config.php');

function sane($var) {
    return (isset($_REQUEST[$var]) ? (($_REQUEST[$var] != "") ? $_REQUEST[$var] : NULL) : NULL); 
}

$salt = "Raktarpan";
$safety = array(md5($salt.'Hrishikesh'), md5($salt.'BloodDonationCamp'), md5($salt.'Shubhangi'));

if (! in_array(sane('auth'), $safety)) {
    die('<title>Denied</title><h1>Unauthorized Access</h1>');
}

$question_array = array();

for($i = 1; $i < 15; $i++) {
    array_push($question_array, "Q".$i."-". sane('q'.$i));
}

$question_answers = implode($question_array, ", ");

$donor_array = array ( 
		"CampId" => sane('cid'),
                "Name" => sane('name'),
		"Roll" => sane('number'),
		"Gender" => sane('gender'),
		"Phone" => sane('phone_no'),
		"Age" => sane('age'),
		"BloodGroup" => sane('blood_group'),
                "Address" => sane('address'),
                "Email" => sane('email'),
                "Source" => sane('camp_know'),
                "Medical" => $question_answers,
	       );

DB::insert('donor', $donor_array);

?>
<body>
 <header>
    <center><img src="images/rakt.png" width="15%" height="15%"></center>
  </header>
<h1>Thank You!</h1>

<div class = "Cong">Congratulations <? echo $donor_array["Name"]; ?>!<br>
	You are about to save three lives!<br></div>

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

We run a 24x7 helpline to provide blood to the needy. If you or your friends are ever in need of blood, feel free to call on this and we will try our best to help you out.

<h3>+91 8882 982 982</h3>

	<h3>~ Raktarpan Team</h3>

    <div class="footer">
        <a href="form.html">Form</a>
	</div>
</body>
