
<?php
session_start();
if(!file_exists('users/' . $_SESSION['username'] . '.xml')){
	header('Location: login.php');
	die;
}
include('configuration.php' );
?>

<html>
<head>


<script src="slambookSpryAssets/slambookSpryValidationTextField.js" type="text/javascript"></script>
<script src="slambookSpryAssets/slambookSpryValidationRadio.js" type="text/javascript"></script>
<script src="slambookSpryAssets/slambookSpryValidationTextarea.js" type="text/javascript"></script>
<script src="slambookSpryAssets/slambookSpryValidationSelect.js" type="text/javascript"></script>
<link href="slambookSpryAssets/slambookSpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="slambookSpryAssets/slambookSpryValidationRadio.css" rel="stylesheet" type="text/css">
<link href="slambookSpryAssets/slambookSpryValidationTextarea.css" rel="stylesheet" type="text/css">
<link href="slambookSpryAssets/slambookSpryValidationSelect.css" rel="stylesheet" type="text/css">
 <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Welcome to Slambook</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- join the dark side :) -->
        <!--link rel="stylesheet" href="css/darkstrap.min.css"-->
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">

       <!-- <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>-->
        



    </head>
    <body>
    
    
    
    <script>

if(typeof jQuery=='undefined'){document.write('<'+'script');document.write(' language="javascript"');document.write(' type="text/javascript"');document.write(' src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js">');document.write('</'+'script'+'>')}</script><script>if(!image_urls){var image_urls=Array()}if(!flash_urls){var flash_urls=Array()}image_urls['rain1']="images/fall/pinkpetal1.png";image_urls['rain2']="images/fall/pinkpetal2.png";image_urls['rain3']="images/fall/redpetal1.png";image_urls['rain4']="images/fall/redpetal2.png";$(document).ready(function(){var c=$(window).width();var 
d=$(window).height();var e=function(a,b){return Math.round(a+(Math.random()*(b-a)))};var f=function(a){setTimeout(function(){a.css({left:e(0,c)+'px',top:'-30px',display:'block',opacity:'0.'+e(10,100)}).animate({top:(d-10)+'px'},e(7500,8000),function(){$(this).fadeOut('slow',function(){f(a)})})},e(1,8000))};$('<div> </div>').attr('id','rainDiv')
.css({position:'fixed',width:(c-20)+'px',height:'1px',left:'0px',top:'-5px',display:'block'}).appendTo('body');for(var i=1;i<=20;i++){var g=$('<img/>').attr('src',image_urls['rain'+e(1,4)])
.css({position:'absolute',left:e(0,c)+'px',top:'-30px',display:'block',opacity:'0.'+e(10,100),'margin-left':0}).addClass('rainDrop').appendTo('#rainDiv');f(g);g=null};var h=0;var j=0;$(window).resize(function(){c=$(window).width();d=$(window).height()})});</script>
<script>if(typeof jQuery=='undefined'){document.write('<'+'script');document.write(' language="javascript"');document.write(' type="text/javascript"');document.write(' src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js">');document.write('</'+'script'+'>')}</script><script>$(document).ready(function(){var a=$('<img>').attr({'src':'images/fall/pinkpetal1.png','border':0});$('<a></a>').css({position:'absolute',right:'0px',top:'22px','z-index':'90'}).attr({'href':'/'}).append(a).appendTo('body')});</script><!-- Falling Rose Petals From  ends-->

        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]--> 

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

<H1><center>
Slambook 
</center></H1>
<DIV class="container">
<center>
<DIV class="account_management">Slambook management is handled by 
<A href="<?php echo "$your_website_link" ?>" target="_blank"><?php echo "$administrator_name" ?></A>.      
           
 
  <LI>If you have no answer that column put hyphen(-) on particular column.</LI>

		</DIV>

<FORM action="slambookprocessing.php" method="post">
<DIV>
<br>
<br>
<label>To:</label>
<input type="email" name="toemail" value="your friend email id">

<input type="hidden" name="ipaddressx" value="<?php $ip = $_SERVER['REMOTE_ADDR']; print $ip; ?> ">
<input type="hidden" name="datex" value="<?php $date= date("l dS F Y h i s A T z"); print $date; ?>">
<input type="hidden" name="uid" value="<?php $ses= $_SESSION['username']; 

$uniqueId= date('ldSFYhisATz');
$total="$ses-"."$date";
print"$total"; ?>"> <center>
  <p><BR>
    <strong>Name Column</strong></p>
  <table width="93%" border="0">
    <tr>
      <td><label>First Name:</label><input type="text" name="firstname"/></td>
      <td><label>Middle Name:</label><input type="text" name="middlename"/></td>
      <td><label>Last Name:</label><input type="text" name="lastname"/></td>
    </tr>
    <tr>
      <td><label><font color='red'>*</font>Full Name:</label><span id="sprytextfield1">
            <input type="text" name="fullname" id="fullname">
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td><label>Nick Name:</label><input type="text" name="nickname"/></td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <hr />
  <p><BR>
    <strong>Friends &amp; Family Column</strong></p>
  <table width="93%" border="0">
    <tr>
      <td><label>Father Name:</label><input type="text" name="fathername" /></td>
      <td><label>Mother Name:</label><input type="text" name="mothername" /></td>
      <td><label>Brother / Sister Name:</label><input type="text" name="bsname" /></td>
    </tr>
    <tr>
      <td><label>Best Friend Name:</label><input type="text" name="bestfriendname" /></td>
      <td><label>First Childhood Friend Name:</label><input type="text" name="firstchildhoodfriendname" /></td>
      <td><label>How do you know me?:</label><input type="text" name="howdidyouknowme" /></td>
    </tr>
  </table>
  <p><hr />
  <p><strong>Postal Address Column</strong>
  </p>

  </p>
  
  <table width="93%" border="0">
    <tr>
      <td><label><font color='red'>*</font>Door / House Number:</label>
        <span id="sprytextfield2">
        <input type="text" name="doornumber" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td><label><font color='red'>*</font>Land Mark:</label>
        <span id="sprytextfield3">
        <input type="text" name="landmark" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td><label><font color='red'>*</font>City / Town / Village Name:</label>
        <span id="sprytextfield4">
        <input type="text" name="townname" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td><label><font color='red'>*</font>District:</label>
        <span id="sprytextfield5">
        <input type="text" name="distict" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td><label><font color='red'>*</font>State/provenance:</label>
        <span id="sprytextfield6">
        <input type="text" name="state" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td><label><font color='red'>*</font>Country:</label>
        <span id="spryselect1">
        <select name="country" id="country">
        <option value="af">Afghanistan</option>
        <option value="ax">Aland Islands</option>
        <option value="al">Albania</option>
        <option value="dz">Algeria</option>
        <option value="as">American Samoa</option>
        <option value="ad">Andorra</option>
        <option value="ao">Angola</option>
        <option value="ai">Anguilla</option>
        <option value="aq">Antarctica</option>
        <option value="ag">Antigua and Barbuda</option>
        <option value="ar">Argentina</option>
        <option value="am">Armenia</option>
        <option value="aw">Aruba</option>
        <option value="ap">Asia/Pacific Region</option>
        <option value="au">Australia</option>
        <option value="at">Austria</option>
        <option value="az">Azerbaijan</option>
        <option value="bs">Bahamas</option>
        <option value="bh">Bahrain</option>
        <option value="bd">Bangladesh</option>
        <option value="bb">Barbados</option>
        <option value="by">Belarus</option>
        <option value="be">Belgium</option>
        <option value="bz">Belize</option>
        <option value="bj">Benin</option>
        <option value="bm">Bermuda</option>
        <option value="bt">Bhutan</option>
        <option value="bo">Bolivia</option>
        <option value="ba">Bosnia and Herzegovina</option>
        <option value="bw">Botswana</option>
        <option value="bv">Bouvet Island</option>
        <option value="br">Brazil</option>
        <option value="io">British Indian Ocean Territory</option>
        <option value="bn">Brunei Darussalam</option>
        <option value="bg">Bulgaria</option>
        <option value="bf">Burkina Faso</option>
        <option value="bi">Burundi</option>
        <option value="kh">Cambodia</option>
        <option value="cm">Cameroon</option>
        <option value="ca">Canada</option>
        <option value="cv">Cape Verde</option>
        <option value="ky">Cayman Islands</option>
        <option value="cf">Central African Republic</option>
        <option value="td">Chad</option>
        <option value="cl">Chile</option>
        <option value="cn">China</option>
        <option value="cx">Christmas Island</option>
        <option value="cc">Cocos (Keeling) Islands</option>
        <option value="co">Colombia</option>
        <option value="km">Comoros</option>
        <option value="cg">Congo</option>
        <option value="cd">Congo DRC</option>
        <option value="ck">Cook Islands</option>
        <option value="cr">Costa Rica</option>
        <option value="ci">Cote d'Ivoire</option>
        <option value="hr">Croatia</option>
        <option value="cu">Cuba</option>
        <option value="cy">Cyprus</option>
        <option value="cz">Czech Republic</option>
        <option value="dk">Denmark</option>
        <option value="dj">Djibouti</option>
        <option value="dm">Dominica</option>
        <option value="do">Dominican Republic</option>
        <option value="ec">Ecuador</option>
        <option value="eg">Egypt</option>
        <option value="sv">El Salvador</option>
        <option value="gq">Equatorial Guinea</option>
        <option value="er">Eritrea</option>
        <option value="ee">Estonia</option>
        <option value="et">Ethiopia</option>
        <option value="eu">Europe</option>
        <option value="fk">Falkland Islands (Malvinas)</option>
        <option value="fo">Faroe Islands</option>
        <option value="fj">Fiji</option>
        <option value="fi">Finland</option>
        <option value="fr">France</option>
        <option value="gf">French Guiana</option>
        <option value="pf">French Polynesia</option>
        <option value="tf">French Southern Territories</option>
        <option value="ga">Gabon</option>
        <option value="gm">Gambia</option>
        <option value="ge">Georgia</option>
        <option value="de">Germany</option>
        <option value="gh">Ghana</option>
        <option value="gi">Gibraltar</option>
        <option value="gr">Greece</option>
        <option value="gl">Greenland</option>
        <option value="gd">Grenada</option>
        <option value="gp">Guadeloupe</option>
        <option value="gu">Guam</option>
        <option value="gt">Guatemala</option>
        <option value="gg">Guernsey</option>
        <option value="gn">Guinea</option>
        <option value="gw">Guinea-Bissau</option>
        <option value="gy">Guyana</option>
        <option value="ht">Haiti</option>
        <option value="hm">Heard Island and McDonald Islands</option>
        <option value="va">Holy See (Vatican City State)</option>
        <option value="hn">Honduras</option>
        <option value="hk">Hong Kong</option>
        <option value="hu">Hungary</option>
        <option value="is">Iceland</option>
        <option value="india" selected="selected">India</option>
        <option value="id">Indonesia</option>
        <option value="ir">Iran</option>
        <option value="iq">Iraq</option>
        <option value="ie">Ireland</option>
        <option value="im">Isle of Man</option>
        <option value="il">Israel</option>
        <option value="it">Italy</option>
        <option value="jm">Jamaica</option>
        <option value="jp">Japan</option>
        <option value="je">Jersey</option>
        <option value="jo">Jordan</option>
        <option value="kz">Kazakhstan</option>
        <option value="ke">Kenya</option>
        <option value="ki">Kiribati</option>
        <option value="kp">Korea</option>
        <option value="kr">Korea</option>
        <option value="kw">Kuwait</option>
        <option value="kg">Kyrgyzstan</option>
        <option value="la">Lao People's Democratic Republic</option>
        <option value="lv">Latvia</option>
        <option value="lb">Lebanon</option>
        <option value="ls">Lesotho</option>
        <option value="lr">Liberia</option>
        <option value="ly">Libyan Arab Jamahiriya</option>
        <option value="li">Liechtenstein</option>
        <option value="lt">Lietuva</option>
        <option value="lu">Luxembourg</option>
        <option value="mo">Macao</option>
        <option value="mk">Macedonia</option>
        <option value="mg">Madagascar</option>
        <option value="mw">Malawi</option>
        <option value="my">Malaysia</option>
        <option value="mv">Maldives</option>
        <option value="ml">Mali</option>
        <option value="mt">Malta</option>
        <option value="mh">Marshall Islands</option>
        <option value="mq">Martinique</option>
        <option value="mr">Mauritania</option>
        <option value="mu">Mauritius</option>
        <option value="yt">Mayotte</option>
        <option value="mx">Mexico</option>
        <option value="fm">Micronesia</option>
        <option value="md">Moldova</option>
        <option value="mc">Monaco</option>
        <option value="mn">Mongolia</option>
        <option value="me">Montenegro</option>
        <option value="ms">Montserrat</option>
        <option value="ma">Morocco</option>
        <option value="mz">Mozambique</option>
        <option value="mm">Myanmar</option>
        <option value="na">Namibia</option>
        <option value="nr">Nauru</option>
        <option value="np">Nepal</option>
        <option value="nl">Netherlands</option>
        <option value="an">Netherlands Antilles</option>
        <option value="nc">New Caledonia</option>
        <option value="nz">New Zealand</option>
        <option value="ni">Nicaragua</option>
        <option value="ne">Niger</option>
        <option value="ng">Nigeria</option>
        <option value="nu">Niue</option>
        <option value="nf">Norfolk Island</option>
        <option value="mp">Northern Mariana Islands</option>
        <option value="no">Norway</option>
        <option value="om">Oman</option>
        <option value="pk">Pakistan</option>
        <option value="pw">Palau</option>
        <option value="ps">Palestinian Territory</option>
        <option value="pa">Panama</option>
        <option value="pg">Papua New Guinea</option>
        <option value="py">Paraguay</option>
        <option value="pe">Peru</option>
        <option value="ph">Philippines</option>
        <option value="pn">Pitcairn</option>
        <option value="pl">Poland</option>
        <option value="pt">Portugal</option>
        <option value="pr">Puerto Rico</option>
        <option value="qa">Qatar</option>
        <option value="re">Reunion</option>
        <option value="ro">Romania</option>
        <option value="ru">Russian Federation</option>
        <option value="rw">Rwanda</option>
        <option value="sh">Saint Helena</option>
        <option value="kn">Saint Kitts and Nevis</option>
        <option value="lc">Saint Lucia</option>
        <option value="pm">Saint Pierre and Miquelon</option>
        <option value="vc">Saint Vincent and the Grenadin</option>
        <option value="ws">Samoa</option>
        <option value="sm">San Marino</option>
        <option value="st">Sao Tome and Principe</option>
        <option value="sa">Saudi Arabia</option>
        <option value="sn">Senegal</option>
        <option value="rs">Serbia</option>
        <option value="sc">Seychelles</option>
        <option value="sl">Sierra Leone</option>
        <option value="sg">Singapore</option>
        <option value="sk">Slovakia</option>
        <option value="si">Slovenia</option>
        <option value="sb">Solomon Islands</option>
        <option value="so">Somalia</option>
        <option value="za">South Africa</option>
        <option value="gs">South Georgia and the South Sandwich Islands</option>
        <option value="es">Spain</option>
        <option value="lk">Sri Lanka</option>
        <option value="sd">Sudan</option>
        <option value="sr">Suriname</option>
        <option value="sj">Svalbard and Jan Mayen</option>
        <option value="sz">Swaziland</option>
        <option value="se">Sweden</option>
        <option value="ch">Switzerland</option>
        <option value="sy">Syrian Arab Republic</option>
        <option value="tw">Taiwan</option>
        <option value="tj">Tajikistan</option>
        <option value="tz">Tanzania</option>
        <option value="th">Thailand</option>
        <option value="tl">Timor-Leste</option>
        <option value="tg">Togo</option>
        <option value="tk">Tokelau</option>
        <option value="to">Tonga</option>
        <option value="tt">Trinidad and Tobago</option>
        <option value="tn">Tunisia</option>
        <option value="tr">Turkey</option>
        <option value="tm">Turkmenistan</option>
        <option value="tc">Turks and Caicos Islands</option>
        <option value="tv">Tuvalu</option>
        <option value="ug">Uganda</option>
        <option value="ua">Ukraine</option>
        <option value="ae">United Arab Emirates</option>
        <option value="gb">United Kingdom</option>
        <option value="us">United States</option>
        <option value="um">United States Minor Outlying Islands</option>
        <option value="uy">Uruguay</option>
        <option value="uz">Uzbekistan</option>
        <option value="vu">Vanuatu</option>
        <option value="ve">Venezuela</option>
        <option value="vn">Vietnam</option>
        <option value="vg">Virgin Islands</option>
        <option value="vi">Virgin Islands</option>
        <option value="wf">Wallis and Futuna</option>
        <option value="eh">Western Sahara</option>
        <option value="ye">Yemen</option>
        <option value="zm">Zambia</option>
        <option value="zw">Zimbabwe</option>
        </select>
        <span class="selectRequiredMsg">Please select an item.</span></span></td>
    </tr>
    <tr>
      <td><label><font color='red'>*</font>Postal / Zip Code:</label>
        <span id="sprytextfield7">
        <input type="text" name="postalcode" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td><label>Earth Coordinates(Longitude,Latitude):</label>
      <input type="text" name="googleearthcoordinates">
      </td>
      <td></td>
    </tr>
  </table>
  <p><hr />
  <p><strong>Network Communication Column</strong>
  </p>

  </p>
  <table width="93%" border="0">
    <tr>
      <td><label><font color='red'>*</font>Email Id:</label>
        <span id="sprytextfield8">
        <input type="email" name="emailid" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td><label>Website:</label><input type="url" name="website" /></td>
      <td><label>Skype Id:</label><input type="text" name="skype" /></td>
    </tr>
    <tr>
      <td><label>Linked In:</label><input type="url" name="linkedin" /></td>
      <td><label>Twitter:</label><input type="url" name="twitter" /></td>
      <td><label>Google+:</label><input type="url" name="googleplus" /></td>
    </tr>
    <tr>
      <td><label>Facebook:</label><input type="url" name="facebook" /></td>
      <td><label>Eskimi:</label><input type="url" name="eskimi" /></td>
      <td><label>Other Id</label><input type="url" name="otherid" /></td>
    </tr>
  </table>
  <p><hr />
  <p><strong>Mobile Network Communication Column</strong>
  </p>

  </p>
  <table width="93%" border="0">
    <tr>
      <td><label><font color='red'>*</font>Mobile Number:<br />(with country code)</label>
        <span id="sprytextfield9">
        <input type="text" name="mobilenumber" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td><label>Land Line Number:<br />(with country code)</label><input type="text" name="landlinenumber" /></td>
      <td><label>VOIP Number:</label><input type="text" name="voipnumber" /></td>
    </tr>
  </table>
  <p><hr />
  <p><strong>Personal Information Column</strong>
  </p>
  <table width="93%" border="0">
    <tr>
      <td width="31%"><label><font color='red'>*</font>Date Of Birth:</label>
        <span id="sprytextfield10">
        <input type="text" name="dateofbirth" id="dateofbirth">
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td width="31%"><label>Zodiac / Astro Sign:</label><input type="text" name="zodiacsign" /></td>
      <td width="31%"><label><font color='red'>*</font>Gender:</label>
        <span id="spryradio1">
        <label>
          <input type="radio" name="gender" value="Male" id="gender_0">
          Male</label>
        <label>
          <input type="radio" name="gender" value="Female" id="gender_1">
          Female</label>
        <br>
        <span class="radioRequiredMsg">Please make a selection.</span></span>
       </td>
    </tr>
  </table>
   <p><hr />
  <p><strong>Likes and Dislikes Column</strong>
  </p>
  <table width="93%" border="0">
    <tr>
      <td><label>Favourite Color:</label><input type="text" name="favcolor"></td>
      <td><label>Favourite Dress:</label><input type="text" name="favdress"></td>
      <td><label>Favourite Music:</label><input type="text" name="favmusic"></td>
    </tr>
    <tr>
      <td><label>Favourite Game:</label><input type="text" name="favgame"></td>
      <td><label>Favourite Dish:</label><input type="text" name="favdish"></td>
      <td><label>Favourite Book:</label><input type="text" name="favbook"></td>
    </tr>
    <tr>
      <td><label>Favourite Actor:</label><input type="text" name="favactor"></td>
      <td><label>Favourite Sports Person:</label><input type="text" name="favsportsperson"></td>
      <td><label>More Interest About:</label><input type="text" name="moreinterestabout"></td>
    </tr>
    <tr>
      <td><label>Things you like mostly:</label><input type="text" name="thingsyoulikemostly"></td>
      <td><label>Funniest moment in your life:</label><input type="text" name="funniestmoment"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><label>Dislike dish:</label><input type="text" name="dislikedish"></td>
      <td><label>Dislike things:</label><input type="text" name="dislikethingst"></td>
      <td><label>Crazy about things like:</label><input type="text" name="crazyaboutthings"></td>
    </tr>
    <tr>
      <td><label>Any other dislike:</label><input type="text" name="anyotherdislikes"></td>
      <td></td>
      <td></td>
    </tr>
  </table>
   <p><hr />
  <p><strong>On sadak pramodh Column</strong>
  </p>
  </p>
  <table width="93%" border="0">
    <tr>
      <td><label>What you like on me:</label><input type="text" name="whatyoulikeonme" /></td>
      <td><label>What you dislike on me:</label><input type="text" name="whatyoudislikeonme" /></td>
      <td><label>Most remember moment with me:</label><input type="text" name="mostremembermomentwithme" /></td>
    </tr>
    <tr>
      <td><label>Suggestions to me:</label><input type="text" name="suggestionstome" /></td>
      <td><label>Most undesirable moment by me:</label><input type="text" name="undesirablemonentbyme" /></td>
      <td><label>First meet with me:</label><input type="text" name="firstmeetwithme" /></td>
    </tr>
  </table>
   <p><hr />
  <p><strong>Goals and Inspirations Column</strong>
  </p>
  
  <table width="93%" border="0">
    <tr>
      <td><label>Life ambition:</label><input type="text" name="lifeambition" /></td>
      <td><label>Inspired by:</label><input type="text" name="inspiredby" /></td>
      <td><label>Your role model:</label><input type="text" name="yourrolemodel" /></td>
    </tr>
  </table>
   <p><hr />
  <p><strong>About You Column</strong>
  </p>
   <table width="94%" height="108" border="0">
    <tr>
      <td><label><font color='red'>*</font>About Your Self:</label>
        <span id="sprytextarea1">
        <textarea name="aboutyou" id="aboutyou" style="width:100%;"></textarea>
        <span class="textareaRequiredMsg">A value is required.</span></span>
        </td>
     </tr>
    </table>
  <p>&nbsp;</p>
<div><input type="submit" class="submit" value="submit" name="login" /></div>
</DIV></FORM>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9");
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10");
var spryradio1 = new Spry.Widget.ValidationRadio("spryradio1");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
</script>

</div><!--/.nav-collapse -->
        </div>
    </div>
</div>";

</div></div> <!-- /container -->

</body>
</html></DIV>
<hr />
<center>
  <p><strong><em>&copy;slambook-<?php echo "$year" ?></em></strong></p>
  <p><strong>slambook version <?php echo "$version" ?></strong></p>
  <p><em>All rights reserved on <?php echo "$rights_name" ?></em></p>
</center></BODY></HTML>
