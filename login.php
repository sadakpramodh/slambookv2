<?php
include 'configuration.php';
$error = false;
if(isset($_POST['login'])){
	$username = preg_replace('/[^A-Za-z]/', '', $_POST['username']);
	$password = md5($_POST['password']);
	if(file_exists('users/' . $username . '.xml')){
		$xml = new SimpleXMLElement('users/' . $username . '.xml', 0, true);
		if($password == $xml->password){
			session_start();
			$_SESSION['username'] = $username;
			header('Location: index.php');
			die;
		}
	}
	$error = true;
}
?>
<HTML>
<HEAD><META content="IE=10.000" 
http-equiv="X-UA-Compatible">
	 <TITLE><?php echo "$projectname"; ?> Login</TITLE> 
<META http-equiv="Content-Type" content="text/html; charset=windows-1252">

 
<META name="GENERATOR" content="MSHTML 10.00.9200.16384">
<link href="slambook.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css">
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
</HEAD> 
<BODY background="background.jpg">



<!-- falling rose petals from  starts -->
<script>

if(typeof jQuery=='undefined'){document.write('<'+'script');document.write(' language="javascript"');document.write(' type="text/javascript"');document.write(' src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js">');document.write('</'+'script'+'>')}</script><script>if(!image_urls){var image_urls=Array()}if(!flash_urls){var flash_urls=Array()}image_urls['rain1']="images/fall/pinkpetal1.png";image_urls['rain2']="images/fall/pinkpetal2.png";image_urls['rain3']="images/fall/redpetal1.png";image_urls['rain4']="images/fall/redpetal2.png";$(document).ready(function(){var c=$(window).width();var 
d=$(window).height();var e=function(a,b){return Math.round(a+(Math.random()*(b-a)))};var f=function(a){setTimeout(function(){a.css({left:e(0,c)+'px',top:'-30px',display:'block',opacity:'0.'+e(10,100)}).animate({top:(d-10)+'px'},e(7500,8000),function(){$(this).fadeOut('slow',function(){f(a)})})},e(1,8000))};$('<div> </div>').attr('id','rainDiv')
.css({position:'fixed',width:(c-20)+'px',height:'1px',left:'0px',top:'-5px',display:'block'}).appendTo('body');for(var i=1;i<=20;i++){var g=$('<img/>').attr('src',image_urls['rain'+e(1,4)])
.css({position:'absolute',left:e(0,c)+'px',top:'-30px',display:'block',opacity:'0.'+e(10,100),'margin-left':0}).addClass('rainDrop').appendTo('#rainDiv');f(g);g=null};var h=0;var j=0;$(window).resize(function(){c=$(window).width();d=$(window).height()})});</script>
<script>if(typeof jQuery=='undefined'){document.write('<'+'script');document.write(' language="javascript"');document.write(' type="text/javascript"');document.write(' src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js">');document.write('</'+'script'+'>')}</script><script>$(document).ready(function(){var a=$('<img>').attr({'src':'images/fall/pinkpetal1.png','border':0});$('<a></a>').css({position:'absolute',right:'0px',top:'22px','z-index':'90'}).attr({'href':'/'}).append(a).appendTo('body')});</script><!-- Falling Rose Petals From  ends-->







<DIV id="header"><IMG class="XtGem logo" style="margin: 5px 0px 0px 5px;" alt="" 
src="sadakpramodh.jpg">         </DIV>

<DIV class="container">
<DIV class="account_management">                Account management is handled by 
<A href="<?php echo "$your_website_link";?>" target="_blank"><?php echo"$administrator_name";?></A>.      
           
<UL>
  <LI>Cookies must be enabled beyond this point.</LI>
  <?php
		if($error){
			echo '<li><font color="red">Invalid username or password.</font></li>';
		}
		?></UL></DIV>
<H2><font color="#663399" class="loginheader">Login</font></H2>
<FORM action="" method="post">
<LABEL class="usernamelogin"><b>Username<b></LABEL><br>
<center>
  <span id="sprytextfield1">
  <input name="username" type="text" size="20" placeholder="username" class="input"/>
  <span class="textfieldRequiredMsg">Please enter username.</span></span>
  </center><br>
<LABEL class="passwordlogin"><b>Password<b></LABEL><br />

<center>
  <span id="sprypassword1">
  <input name="password" type="password" size="20" placeholder="password" class="input">
  <span class="passwordRequiredMsg">Please enter password.</span></span>
  		</center>				 
<P><INPUT name="login" class="submit" type="submit" value="Login"></P></FORM><A 
href="register.php"><font style='font-family:Segoe Script;'><b>Register</b></font></A> 
</DIV>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
</script>
</BODY></HTML>
