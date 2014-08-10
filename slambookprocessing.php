
<?php
session_start();
if(!file_exists('users/' . $_SESSION['username'] . '.xml')){
	header('Location: login.php');
	die;
}
include('configuration.php' );

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>slambook</title>
<link href="slambook1.css" rel="stylesheet" type="text/css">
</head>

<body><script>

if(typeof jQuery=='undefined'){document.write('<'+'script');document.write(' language="javascript"');document.write(' type="text/javascript"');document.write(' src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js">');document.write('</'+'script'+'>')}</script><script>if(!image_urls){var image_urls=Array()}if(!flash_urls){var flash_urls=Array()}image_urls['rain1']="images/fall/pinkpetal1.png";image_urls['rain2']="images/fall/pinkpetal2.png";image_urls['rain3']="images/fall/redpetal1.png";image_urls['rain4']="images/fall/redpetal2.png";$(document).ready(function(){var c=$(window).width();var 
d=$(window).height();var e=function(a,b){return Math.round(a+(Math.random()*(b-a)))};var f=function(a){setTimeout(function(){a.css({left:e(0,c)+'px',top:'-30px',display:'block',opacity:'0.'+e(10,100)}).animate({top:(d-10)+'px'},e(7500,8000),function(){$(this).fadeOut('slow',function(){f(a)})})},e(1,8000))};$('<div> </div>').attr('id','rainDiv')
.css({position:'fixed',width:(c-20)+'px',height:'1px',left:'0px',top:'-5px',display:'block'}).appendTo('body');for(var i=1;i<=20;i++){var g=$('<img/>').attr('src',image_urls['rain'+e(1,4)])
.css({position:'absolute',left:e(0,c)+'px',top:'-30px',display:'block',opacity:'0.'+e(10,100),'margin-left':0}).addClass('rainDrop').appendTo('#rainDiv');f(g);g=null};var h=0;var j=0;$(window).resize(function(){c=$(window).width();d=$(window).height()})});</script>
<script>if(typeof jQuery=='undefined'){document.write('<'+'script');document.write(' language="javascript"');document.write(' type="text/javascript"');document.write(' src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js">');document.write('</'+'script'+'>')}</script><script>$(document).ready(function(){var a=$('<img>').attr({'src':'images/fall/pinkpetal1.png','border':0});$('<a></a>').css({position:'absolute',right:'0px',top:'22px','z-index':'90'}).attr({'href':'/'}).append(a).appendTo('body')});</script><!-- Falling Rose Petals From  ends-->

<?php

if(isset($_POST['login'])){
	
	/*$uid = $_POST['uid'];*/
	$uid = preg_replace('/[^A-Za-z0-9]/', '', $_POST['uid']);
	$datex = $_POST['datex'];
	$ipaddressx = $_POST['ipaddressx'];
	$toemail = $_POST['toemail'];
	$fullname = $_POST['fullname'];
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$lastname =$_POST['lastname'];
	$nickname =$_POST['nickname'];
	$fathername =$_POST['fathername'];
	$mothername =$_POST['mothername'];
	$bsname =$_POST['bsname'];
	$bestfriendname =$_POST['bestfriendname'];
	$firstchildhoodfriendname =$_POST['firstchildhoodfriendname'];
	$howdidyouknowme =$_POST['howdidyouknowme'];
	$doornumber =$_POST['doornumber'];
	$landmark =$_POST['landmark'];
	$townname =$_POST['townname'];
	$distict =$_POST['distict'];
	$state =$_POST['state'];
	$country =$_POST['country'];
	$postalcode =$_POST['postalcode'];
	$googleearthcoordinates =$_POST['googleearthcoordinates'];
	$emailid =$_POST['emailid'];
	$website =$_POST['website'];
	$skype =$_POST['skype'];
	$linkedin =$_POST['linkedin'];
	$twitter =$_POST['twitter'];
	$googleplus =$_POST['googleplus'];
	$facebook =$_POST['facebook'];
	$eskimi =$_POST['eskimi'];
	$otherid =$_POST['otherid'];
	$mobilenumber =$_POST['mobilenumber'];
	$landlinenumber =$_POST['landlinenumber'];
	$voipnumber =$_POST['voipnumber'];
	$dateofbirth =$_POST['dateofbirth'];
	$zodiacsign =$_POST['zodiacsign'];
	$gender =$_POST['gender'];
	$favcolor =$_POST['favcolor'];
	$favdress =$_POST['favdress'];
	$favmusic =$_POST['favmusic'];
	$favgame =$_POST['favgame'];
	$favdish =$_POST['favdish'];
	$favbook =$_POST['favbook'];
	$favactor =$_POST['favactor'];
	$favsportsperson =$_POST['favsportsperson'];
	$moreinterestabout =$_POST['moreinterestabout'];
	$thingsyoulikemostly =$_POST['thingsyoulikemostly'];
	$funniestmoment =$_POST['funniestmoment'];
	$dislikedish =$_POST['dislikedish'];
	$dislikethingst =$_POST['dislikethingst'];
	$crazyaboutthings =$_POST['crazyaboutthings'];
	$anyotherdislikes =$_POST['anyotherdislikes'];
	$whatyoulikeonme =$_POST['whatyoulikeonme'];
	$whatyoudislikeonme =$_POST['whatyoudislikeonme'];
	$mostremembermomentwithme =$_POST['mostremembermomentwithme'];
	$suggestionstome =$_POST['suggestionstome'];
	$undesirablemonentbyme =$_POST['undesirablemonentbyme'];
	$firstmeetwithme =$_POST['firstmeetwithme'];
	$lifeambition =$_POST['lifeambition'];
	$inspiredby =$_POST['inspiredby'];
	$yourrolemodel =$_POST['yourrolemodel'];
	$aboutyou =$_POST['aboutyou'];
		$xml = new SimpleXMLElement('<slambook></slambook>');
		$xml->addChild('slambookuid', $uid);
		$xml->addChild('date', $datex);
		$xml->addChild('ipaddress', $ipaddressx);
		$xml->addChild('toemail', $toemail);
		$xml->addChild('fullname', $fullname);
		$xml->addchild('firstname',$firstname);
		$xml->addchild('middlename',$middlename);
		$xml->addchild('lastname',$lastname);
		$xml->addchild('nickname',$nickname);
		$xml->addchild('fathername',$fathername);
		$xml->addchild('mothername',$mothername);
		$xml->addchild('bsname',$bsname);
		$xml->addchild('bestfriendname',$bestfriendname);
		$xml->addchild('firstchildhoodfriendname',$firstchildhoodfriendname);
		$xml->addchild('howdidyouknowme',$howdidyouknowme);
		$xml->addchild('doornumber',$doornumber);
		$xml->addchild('landmark',$landmark);
		$xml->addchild('townname',$townname);
		$xml->addchild('distict',$distict);
		$xml->addchild('state',$state);
		$xml->addchild('country',$country);
		$xml->addchild('postalcode',$postalcode);
		$xml->addchild('googleearthcoordinates',$googleearthcoordinates);
		$xml->addchild('emailid',$emailid);
		$xml->addchild('website',$website);
		$xml->addchild('skype',$skype);
		$xml->addchild('linkedin',$linkedin);
		$xml->addchild('twitter',$twitter);
		$xml->addchild('googleplus',$googleplus);
		$xml->addchild('facebook',$facebook);
		$xml->addchild('eskimi',$eskimi);
		$xml->addchild('otherid',$otherid);
		$xml->addchild('mobilenumber',$mobilenumber);
		$xml->addchild('landlinenumber',$landlinenumber);
		$xml->addchild('voipnumber',$voipnumber);
		$xml->addchild('dateofbirth',$dateofbirth);
		$xml->addchild('zodiacsign',$zodiacsign);
		$xml->addchild('gender',$gender);
		$xml->addchild('favcolor',$favcolor);
		$xml->addchild('favdress',$favdress);
		$xml->addchild('favmusic',$favmusic);
		$xml->addchild('favgame',$favgame);
		$xml->addchild('favdish',$favdish);
		$xml->addchild('favbook',$favbook);
		$xml->addchild('favactor',$favactor);
		$xml->addchild('favsportsperson',$favsportsperson);
		$xml->addchild('moreinterestabout',$moreinterestabout);
		$xml->addchild('thingsyoulikemostly',$thingsyoulikemostly);
		$xml->addchild('funniestmoment',$funniestmoment);
		$xml->addchild('dislikedish',$dislikedish);
		$xml->addchild('dislikethingst',$dislikethingst);
		$xml->addchild('crazyaboutthings',$crazyaboutthings);
		$xml->addchild('anyotherdislikes',$anyotherdislikes);
		$xml->addchild('whatyoulikeonme',$whatyoulikeonme);
		$xml->addchild('whatyoudislikeonme',$whatyoudislikeonme);
		$xml->addchild('mostremembermomentwithme',$mostremembermomentwithme);
		$xml->addchild('suggestionstome',$suggestionstome);
		$xml->addchild('undesirablemonentbyme',$undesirablemonentbyme);
		$xml->addchild('firstmeetwithme',$firstmeetwithme);
		$xml->addchild('lifeambition',$lifeambition);
		$xml->addchild('inspiredby',$inspiredby);
		$xml->addchild('yourrolemodel',$yourrolemodel);
		$xml->addchild('aboutyou',$aboutyou);
		$xml->asXML('slambook/' . $uid. '.xml');
		$xml->asXML('slams/' . $uid. '.html');

}
?>


<?php

//mailing system

$message = "<html>
<head>
<style>
label
{
	font-size:18px;
	color:#69F;
}
body
{
text-wrap:normal;
font-family:Segoe Script;
font-size:16px;
color:#906;
}

.valuesofform
{
	font-size:18px;
	color:#33C;
}

</style>


</head>
<body>

<center>
  <h1><font color='#660033'>slambook</font></h1><sub><font color='#CC3333'>from $fullname</font></sub></center>
<hr>
<DIV>
  <p><BR>
    <strong>Name Column</strong></p>
  <table width='93%' border='0'>
    <tr>
      <td><label>First Name:</label><br><label class='valuesofform'>" . $firstname . "</label></td>
      <td><label>Middle Name:</label><br><label class='valuesofform'>" . $middlename . "</td>
      <td><label>Last Name:</label><br><label class='valuesofform'>" . $lastname . "</td>
    </tr>
    <tr>
      <td><label><font color='red'>*</font>Full Name:</label><br><label class='valuesofform'>" . $fullname . "</td>
      <td><label>Nick Name:</label><br><label class='valuesofform'> " . $nickname . "</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <hr />
  <p><BR>
    <strong>Friends &amp; Family Column</strong></p>
  <table width='93%' border='0'>
    <tr>
      <td><label>Father Name:</label><br><label class='valuesofform'> " . $fathername . "</td>
      <td><label>Mother Name:</label><br><label class='valuesofform'>" . $mothername . "</td>
      <td><label>Brother / Sister Name:</label><br><label class='valuesofform'>" . $bsname . "</td>
    </tr>
    <tr>
      <td><label>Best Friend Name:</label><br><label class='valuesofform'>" . $bestfriendname . "</td>
      <td><label>First Childhood Friend Name:</label><br><label class='valuesofform'>" . $firstchildhoodfriendname . "</td>
      <td><label>How do you know me?:</label><br><label class='valuesofform'>" . $howdidyouknowme . "</td>
    </tr>
  </table>
  <p><hr />
  <p><strong>Postal Address Column</strong>
  </p>

  </p>
  
  <table width='93%' border='0'>
    <tr>
      <td><label><font color='red'>*</font>Door / House Number:</label><br><label class='valuesofform'> " . $doornumber . "</td>
      <td><label><font color='red'>*</font>Land Mark:</label><br><label class='valuesofform'>" . $landmark . "</td>
      <td><label><font color='red'>*</font>City / Town / Village Name:</label><br><label class='valuesofform'>" . $townname . "</td>
    </tr>
    <tr>
      <td><label><font color='red'>*</font>District:</label><br><label class='valuesofform'> " . $distict . "</td>
      <td><label><font color='red'>*</font>State:</label><br><label class='valuesofform'> " . $state . "</td>
      <td><label><font color='red'>*</font>Country:</label><br><label class='valuesofform'>" . $country . "</td>
    </tr>
    <tr>
      <td><label><font color='red'>*</font>Postal / Zip Code:</label><br><label class='valuesofform'> " . $postalcode . "</td>
      <td><label>Earth Coordinates(Longitude,Latitude):</label><br><label class='valuesofform'> " . $googleearthcoordinates . "</td>
      <td></td>
    </tr>
  </table>
  <p><hr />
  <p><strong>Network Communication Column</strong>
  </p>

  </p>
  <table width='93%' border='0'>
    <tr>
      <td><label><font color='red'>*</font>Email Id:</label><br><label class='valuesofform'>" . $emailid . "</td>
      <td><label>Website:</label><br><label class='valuesofform'>" . $website . "</td>
      <td><label>Skype Id:</label><br><label class='valuesofform'> " . $skype . "</td>
    </tr>
    <tr>
      <td><label>Linked In:</label><br><label class='valuesofform'> " . $linkedin . "</td>
      <td><label>Twitter:</label><br><label class='valuesofform'> " . $twitter . " </td>
      <td><label>Google+:</label><br><label class='valuesofform'>" . $googleplus . "</td>
    </tr>
    <tr>
      <td><label>Facebook:</label><br><label class='valuesofform'>" . $facebook . "</td>
      <td><label>Eskimi:</label><br><label class='valuesofform'>" . $eskimi . "</td>
      <td><label>Other Id</label><br><label class='valuesofform'>" . $otherid . "</td>
    </tr>
  </table>
  <p><hr />
  <p><strong>Mobile Network Communication Column</strong>
  </p>

  </p>
  <table width='93%' border='0'>
    <tr>
      <td><label><font color='red'>*</font>Mobile Number:<br />(with country code)</label><br><label class='valuesofform'>"  .    $mobilenumber . "</td>
      <td><label>Land Line Number:<br />(with country code)</label><br><label class='valuesofform'>" . $landlinenumber . "</td>
      <td><label>VOIP Number:</label><br><label class='valuesofform'>" . $voipnumber . " </td>
    </tr>
  </table>
  <p><hr />
  <p><strong>Personal Information Column</strong>
  </p>
  <table width='93%' border='0'>
    <tr>
      <td width='31%'><label><font color='red'>*</font>Date Of Birth:</label><br><label class='valuesofform'>". $dateofbirth . "</td>
      <td width='31%'><label>Zodiac / Astro Sign:</label><br><label class='valuesofform'>" . $zodiacsign . "</td>
      <td width='31%'><label><font color='red'>*</font>Gender:</label><br><label class='valuesofform'>" . $gender . "</td>
    </tr>
  </table>
   <p><hr />
  <p><strong>Likes and Dislikes Column</strong>
  </p>
  <table width='93%' border='0'>
    <tr>
      <td><label>Favourite Color:</label><br><label class='valuesofform'> " . $favcolor . "</td>
      <td><label>Favourite Dress:</label><br><label class='valuesofform'>" . $favdress . "</td>
      <td><label>Favourite Music:</label><br><label class='valuesofform'>" . $favmusic . "</td>
    </tr>
    <tr>
      <td><label>Favourite Game:</label><br><label class='valuesofform'>" . $favgame . "</td>
      <td><label>Favourite Dish:</label><br><label class='valuesofform'>" . $favdish . "</td>
      <td><label>Favourite Book:</label><br><label class='valuesofform'>" . $favbook . "</td>
    </tr>
    <tr>
      <td><label>Favourite Actor:</label><br><label class='valuesofform'>" . $favactor . "</td>
      <td><label>Favourite Sports Person:</label><br><label class='valuesofform'>" . $favsportsperson . "</td>
      <td><label>More Interest About:</label><br><label class='valuesofform'>" . $moreinterestabout . "</td>
    </tr>
    <tr>
      <td><label>Things you like mostly:</label><br><label class='valuesofform'>" . $thingsyoulikemostly . "</td>
      <td><label>Funniest moment in your life:</label><br><label class='valuesofform'>" . $funniestmoment . "</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><label>Dislike dish:</label><br><label class='valuesofform'>" . $dislikedish . "</td>
      <td><label>Dislike things:</label><br><label class='valuesofform'>" . $dislikethingst . "</td>
      <td><label>Crazy about things like:</label><br><label class='valuesofform'>" . $crazyaboutthings ."</td>
    </tr>
    <tr>
      <td><label>Any other dislike:</label><br><label class='valuesofform'>" . $anyotherdislikes . "</td>
      <td></td>
      <td></td>
    </tr>
  </table>
   <p><hr />
  <p><strong>About me Column</strong>
  </p>
  </p>
  <table width='93%' border='0'>
    <tr>
      <td><label>What you like on me:</label><br><label class='valuesofform'>" . $whatyoulikeonme . "</td>
      <td><label>What you dislike on me:</label><br><label class='valuesofform'>" . $whatyoudislikeonme . "</td>
      <td><label>Most remember moment with me:</label><br><label class='valuesofform'>" . $mostremembermomentwithme . "</td>
    </tr>
    <tr>
      <td><label>Suggestions to me:</label><br><label class='valuesofform'>" . $suggestionstome . "</td>
      <td><label>Most undesirable moment by me:</label><br><label class='valuesofform'>" . $undesirablemonentbyme . "</td>
      <td><label>First meet with me:</label><br><label class='valuesofform'>" . $firstmeetwithme . "</td>
    </tr>
  </table>
   <p><hr />
  <p><strong>Goals and Inspirations Column</strong>
  </p>
  
  <table width='93%' border='0'>
    <tr>
      <td><label>Life ambition:</label><br><label class='valuesofform'>" . $lifeambition . "</td>
      <td><label>Inspired by:</label><br><label class='valuesofform'>" . $inspiredby . "</td>
      <td><label>Your role model:</label><br><label class='valuesofform'>" . $yourrolemodel . "</td>
    </tr>
  </table>
   <p><hr />
  <p><strong>About You Column</strong>
  </p>
   <table width='94%' height='108' border='0'>
    <tr>
      <td><label><font color='red'>*</font>About Your Self:</label>
        <br><label class='valuesofform'>" . $aboutyou . "</td>
     </tr>
     </table>
	 <p><hr></p>
	  <table width='93%' border='0'>
    <tr>
      <td><label>To:</label><br><label class='valuesofform'>" . $toemail . "</td>
      <td><label>Slambook uid:</label><br><label class='valuesofform'>" . $uid . "</td>
      <td><label>IP Address:</label><br><label class='valuesofform'>" . $ipaddressx . "</td>
    </tr>
  </table>
	 <p><hr></p>
	 
	 <center>
  <p><strong><em>&copy;slambook-" . $year ."</em></strong></p>
  <p><strong>slambook version " . $version ."</strong></p>
  <p><em>All rights reserved on " . $rights_name ."</em></p>
  <p><strong>Date written on ". $datex ."</strong></p>
</center>  </body></html>

";


$html=$message;
$headers  = 'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 // multiple recipients 
$to  = $toemail . ', '; // note the comma 
$xml = new SimpleXMLElement('users/' . $_SESSION['username'] . '.xml', 0, true);
$fromemail = $xml->email;

$to .= $fromemail;
// subject 
$subject = 'slambook from ';
$subject .= $fullname;
// Mail it 
mail($to, $subject, $message, $headers); 


$filenamex=$uid.".html";
$slamofpath="slams/" . $uid .".html";
$handle = fopen("$slamofpath", "w");

    fwrite($handle, $message);


fclose($handle);

echo"<script> alert('Slambook successfully sent!');</script>";

echo"<a href='$slamofpath' target='_blank' media='print' download='$fileneamex' ><h1><center><font style='font-family:Segoe Script;'>Download your slambook copy.</font></center></h1></a> ";

echo "<br><a href='index.php'><h2><center><font style='font-family:Segoe Script;'>Back to home! :)</font></center></h2></a>";

/*echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';*/



/*
include("mpdf.php");

$mpdf=new mPDF('c','A4','','' , 0 , 0 , 0 , 0 , 0 , 0); 

$mpdf->SetDisplayMode('fullpage');

$mpdf->list_indent_first_level = 0;	// 1 or 0 - whether to indent the first level of a list

$mpdf->WriteHTML($html);   
$mpdf->Output();

*/
?>
</body>
</html>