<?php

$CampDir = ".";
require_once($CampDir . '/settings.php');

?>
<!DOCTYPE html>
<head>
   <title>Blood Donation Form</title>
   <link href='<?php echo $CampDir; ?>/css/main.css' rel='stylesheet' type='text/css' />
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href='http://fonts.googleapis.com/css?family=Lobster|Pacifico:400,700,300|Roboto:400,100,100italic,300,300italic,400italic,500italic,500' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,500,600,700,300' rel='stylesheet' type='text/css'>
   <!--webfonts-->
   <script type="text/javascript">
      function display_hidden(that) {
          if (that.value == "NA") {
              document.getElementById("addr_div").style.display = "";
          } else {
              document.getElementById("addr_div").style.display = "none";
          }
      }
   </script>
</head>
<body>
   <header>
   <center><img class="header_image" src="<?php echo $CampDir; ?>/images/rakt.png"></center>
   </header>
   <div class="form_container" id="content">
      <form action="donor.php" method="post">
      <!-- input type="hidden" name="cid" value="<?php // echo $CampId; ?>" -->
      <!-- input type="hidden" name="auth" value="<?php // echo $CampAuth; ?>" -->
         <div class="form">
            <h1 style="text-align: center;">General Details</h1>
            <ol>
               <li>Name: &emsp;&emsp; <input type="text" name="name" size="50" required>
               </li>
               <li>Roll No.(IITK): &emsp;&emsp; <input type="text" name="roll_no" required>
               </li>
               <li>
                  Gender:
                  <table>
                     <tr>
                        <td><label><input type="radio" name="gender" value="M" required> Male</label></td>
                        <td><label><input type="radio" name="gender" value="F"> Female</label> </td>
                        <td><label><input type="radio" name="gender" value="O"> Others</label> </td>
                     </tr>
                  </table>
               </li>
               <li>Contact No: &emsp;&emsp; <input type="number" name="phone_no" min="1000000000" max="9999999999" required>
               </li>
               <li>Age: &emsp;&emsp; <input type="number" name="age" min="18" max="100" required>
               </li>
               <li>
                  Blood Group:
                  <table class="bg">
                     <tr>
                        <td><label><input type="radio" name="blood_group" value="A+" required> A+</label></td>
                        <td><label><input type="radio" name="blood_group" value="A-"> A-</label></td>
                     </tr>
                     <tr>
                        <td><label><input type="radio" name="blood_group" value="B+"> B+</label></td>
                        <td><label><input type="radio" name="blood_group" value="B-"> B-</label></td>
                     </tr>
                     <tr>
                        <td><label><input type="radio" name="blood_group" value="O+"> O+</label></td>
                        <td><label><input type="radio" name="blood_group" value="O-"> O-</label></td>
                     </tr>
                     <tr>
                        <td><label><input type="radio" name="blood_group" value="AB+"> AB+</label></td>
                        <td><label><input type="radio" name="blood_group" value="AB-"> AB-</label></td>
                     </tr>
                     <tr>
                        <td><label><input type="radio" name="blood_group" value="NULL">Others/Don't Know</label></td>
                     </tr>
                  </table>
               </li>
               <li>
                  Address <br> Room No. / House No.: &emsp; <input type="text" name="room" size="20" maxlength="20" required> &emsp;&emsp;&emsp;&emsp; Hall: &emsp;
                  <select id="hostel" name=hostel onchange="display_hidden(this)" required>
                     <option selected hidden>Select..</option>
                     <option name="hostel" value="GH1">GH1</option>
                     <option name="hostel" value="H1">Hall 1</option>
                     <option name="hostel" value="H2">Hall 2</option>
                     <option name="hostel" value="H3">Hall 3</option>
                     <option name="hostel" value="H4">Hall 4</option>
                     <option name="hostel" value="H5">Hall 5</option>
                     <option name="hostel" value="GH2">GHT/ GH2</option>
                     <option name="hostel" value="H7">Hall 7</option>
                     <option name="hostel" value="H8">Hall 8</option>
                     <option name="hostel" value="H9">Hall 9</option>
                     <option name="hostel" value="H10">Hall 10</option>
                     <option name="hostel" value="H11">Hall 11</option>
                     <option name="hostel" value="H12">Hall 12</option>
                     <option name="hostel" value="SBRA">RA Residence</option>
                     <option name="hostel" value="FR">Faculty Residence</option>
                     <option name="hostel" value="NA">Other</option>
                  </select>
                  <div id="addr_div" style="display: none">
                     <br>Other: &emsp;&emsp; <input type="text" name="address" size="75" maxlength="100">
                  </div>
               </li>
               <li>Email Id: &emsp;&emsp; <input type="text" name="email" required>
               </li>
               <li>
                  How do you know about this Camp?
                  <table class="tabw_80">
                     <tr>
                        <td><label><input type="radio" name="source" value="Posters" required> Posters</label></td>
                        <td><label><input type="radio" name="source" value="Mail"> Mail</label></td>
                        <td><label><input type="radio" name="source" value="Friends"> Friends</label></td>
                        <td><label><input type="radio" name="source" value="Facebook"> Facebook</label></td>
                        <td><label><input type="radio" name="source" value="Other"> Other</label></td>
                     </tr>
                  </table>
            </ol>
         </div>
         <br>
         <hr>
         <br>
         <div class="form">
            <h1 style="text-align: center;">Medical Details</h1>
            <br>
            <!-- <p>Have you donated blood before?<br> 
               <label><input type="radio" name="q1" value="1"> Yes <br>
               <label><input type="radio" name="q1" value="2"> No <br></p> -->
            <ol>
               </li>
               <li>
                  Was your last donation within last three months?
                  <table class="tabw_100">
                     <tr>
                        <td><label><input type="radio" name="q2" value="1" required> Yes</label></td>
                        <td><label><input type="radio" name="q2" value="2" checked> No / NA</label></td>
                     </tr>
                  </table>
               </li>
               <li>
                  Did you have any discomfort during last donation?
                  <table class="tabw_100">
                     <tr>
                        <td><label><input type="radio" name="q3" value="1" required> Yes</label></td>
                        <td><label><input type="radio" name="q3" value="2" checked> No / NA</label></td>
                     </tr>
                  </table>
               </li>
               <li>
                  Are you feeling well today?
                  <table class="tabw_80">
                     <tr>
                        <td><label><input type="radio" name="q4" value="1" required checked> Yes</label></td>
                        <td><label><input type="radio" name="q4" value="2"> No</label></td>
                     </tr>
                  </table>
               </li>
               <li>
                  Did you sleep well last night?
                  <table class="tabw_80">
                     <tr>
                        <td><label><input type="radio" name="q5" value="1" required checked> Yes</label></td>
                        <td><label><input type="radio" name="q5" value="2"> No</label></td>
                     </tr>
                  </table>
               </li>
               <li>
                  Have you had anything to eat in last 4 hours?
                  <table class="tabw_80">
                     <tr>
                        <td><label><input type="radio" name="q6" value="1" required checked> Yes</label></td>
                        <td><label><input type="radio" name="q6" value="2"> No</label></td>
                     </tr>
                  </table>
               </li>
               <li>
                  Do you have any reason to believe that you are infected with Hepatitis, Malaria,HIV/AIDS, Veneral Disease?
                  <table class="tabw_80">
                     <tr>
                        <td><label><input type="radio" name="q7" value="1" required> Yes</label></td>
                        <td><label><input type="radio" name="q7" value="2" checked> No</label></td>
                     </tr>
                  </table>
               </li>
               <li>In last six months have you had history of any of the following?<br>
                  <label><input type="radio" name="q8" value="1" required> Unexpected Weight Loss</label><br>
                  <label><input type="radio" name="q8" value="2"> Repeated Diarrhea</label><br>
                  <label><input type="radio" name="q8" value="3"> Continous Cold n Cough</label><br>
                  <label><input type="radio" name="q8" value="4"> Continous Low Grade Fever</label><br>
                  <label><input type="radio" name="q8" value="5" checked> None of the above</label><br>
               </li>
               <li>In last six months have you had any of the following?<br>
                  <label><input type="radio" name="q9" value="1" required> Tattooing</label><br>
                  <label><input type="radio" name="q9" value="2"> Ear/Body Piercing</label><br>
                  <label><input type="radio" name="q9" value="3"> Dental Extraction</label><br>
                  <label><input type="radio" name="q9" value="4"> Accupuncture</label><br>
                  <label><input type="radio" name="q9" value="5" checked> None of the above</label><br>
               </li>
               <li>Do you suffer from any of the following diseases?<br>
                  <label><input type="radio" name="q10" value="1" required> Heart/Lung/Kidney Disease</label><br>
                  <label><input type="radio" name="q10" value="2"> Cancer/Malignant Disease</label><br>
                  <label><input type="radio" name="q10" value="3"> Malaria/Tuberculosis</label><br>
                  <label><input type="radio" name="q10" value="4"> Diabetes</label><br>
                  <label><input type="radio" name="q10" value="5"> Allergic Disease/Jaundice/Hepatitis B-C</label><br>
                  <label><input type="radio" name="q10" value="6"> Abnormal Bleeding Tendency/Fainting Spells</label><br>
                  <label><input type="radio" name="q10" value="7" checked> None of the above</label><br>
               </li>
               <li>Have you had any of the following in last 72 hours?<br>
                  <label><input type="radio" name="q11" value="1" required> Antibiotics/Aspirin/Antiallergy</label><br>
                  <label><input type="radio" name="q11" value="2"> Insulins/Steroids/Hormones</label><br>
                  <label><input type="radio" name="q11" value="3"> Contraceptive/Immunization pills</label><br>
                  <label><input type="radio" name="q11" value="4"> Vaccination / Rabies Vaccine</label><br>
                  <label><input type="radio" name="q11" value="5"> Alchohol</label><br>
                  <label><input type="radio" name="q11" value="6" checked> None of the above</label><br>
               </li>
               <li>Have you had any surgery or Blood Transfusion in past six months?<br>
                  <label><input type="radio" name="q12" value="1" required> Major</label><br>
                  <label><input type="radio" name="q12" value="2"> Minor</label><br>
                  <label><input type="radio" name="q12" value="3"> Transplant</label><br>
                  <label><input type="radio" name="q12" value="4"> Transfusion</label><br>
                  <label><input type="radio" name="q12" value="5" checked> None of the above</label><br>
               </li>
               <li>For Women Donors only, is any of the following applicable?<br>
                  <label><input type="radio" name="q13" value="1" required> You are having Menstruations/Periods</label><br>
                  <label><input type="radio" name="q13" value="2"> You are pregnant</label><br>
                  <label><input type="radio" name="q13" value="3"> You have a baby less than of 18 months</label><br>
                  <label><input type="radio" name="q13" value="4"> You have had an abortion in last three months</label><br>
                  <label><input type="radio" name="q13" value="5" checked> None of the above / Not applicable</label><br>
               </li>
               <li>Do you DISAGREE with any of these<br>
                  <label><input type="radio" name="q14" value="1" required> Blood donation is totally voluntary act and no inducement or remuneration has been offered for the same.</label><br>
                  <label><input type="radio" name="q14" value="2"> Donation of blood is a medical procedure and that by donating voluntarily, I accept risks involved.</label><br>
                  <label><input type="radio" name="q14" value="3">My blood will be tested for Hepatitis B and C, malarial parasite, HIV/AIDS and other venereal disease in addition to any other screening to
                  ensure blood safety.</label><br>
                  <label><input type="radio" name="q14" value="4">I prohibit any information provided by me and donation to be discussed with any other individual or government agency without my prior permission.</label><br>
                  <label><input type="radio" name="q14" value="5" checked>No, I agree with all the above points.</label><br></p>
            </ol>
         </div>
         <div class="submit_button"><input type="image" src="<?php echo $CampDir; ?>/images/button.png" alt="Submit"></div>
      </form>
   </div>
</body>

