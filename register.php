<?php
include('configuration.php' );
define ("MAX_SIZE","100000");
$errors = array();
error_reporting(0);
//define a maxim size for the uploaded images in Kb

if(isset($_POST['login']))


	{
		$username = preg_replace('/[^A-Za-z]/', '', $_POST['username']);
		$email = $_POST['email'];
		$password = $_POST['password'];
		$c_password = $_POST['c_password'];
		$securityquestion=$_POST['securityquestion'];
		$securityanswer=$_POST['securityanswer'];
		$image=$_FILES['image']['name'];
		$ipaddress=$_POST['ipaddress'];
		$regdate=$_POST['regdate'];

	
	if(file_exists('users/' . $username . '.xml'))
		{
		$errors[] = 'Username already exists';
		}
	if($username == '')
		{
		$errors[] = 'Username is blank';
		}
	if($email == '')
		{
		$errors[] = 'Email is blank';
		}
	if($password == '' || $c_password == '')
		{
		$errors[] = 'Passwords are blank';
		}
	if($password != $c_password)
		{
		$errors[] = 'Passwords do not match';
		}
	if($securityquestion == '')
		{
		$errors[] = 'Security Question is blank';
		}
	if($securityanswer == '')
		{
		$errors[] = 'Security Answer is blank';
		}
	


	

	if(count($errors) == 0)
		{

		$xml = new SimpleXMLElement('<user></user>');
		$xml->addChild('username', $username);
		$xml->addChild('password', md5($password));
		$xml->addChild('email', $email);
		$xml->addChild('securityquestion', $securityquestion);
		$xml->addChild('securityanswer', md5($securityanswer));
		$xml->addChild('photoname',$newname);
		$xml->addChild('ipaddress',$ipaddress);
		$xml->addChild('regdate',$regdate);
		$xml->asXML('users/' . $username . '.xml');
		$photoname="$newname";
		
		/*
		$db = "$database_registration";
 		$link = mysql_connect("$host_registration","$username_db_registaration","$password_db_registration");
 		mysql_select_db($db, $link);
 		mysql_query ("INSERT INTO $table_registration(username,password,email,securityquestion,securityanswer,photoname) values('$username', '$password', '$email', '$securityquestion','$securityanswer', '$photoname')");
 		mysql_close();
  		print mysql_error();
*/

		header('Location: login.php');
		die;


	}
	
	
	}


?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<!-- saved from url=(0040)http://127.0.0.1:8887/users/register.php -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><HTML 
xmlns="http://www.w3.org/1999/xhtml"><HEAD><META content="IE=10.000" 
http-equiv="X-UA-Compatible">
	 <TITLE>Register</TITLE>     
<META http-equiv="Content-Type" content="text/html; charset=windows-1252">
<META name="GENERATOR" content="MSHTML 10.00.9200.16384">
<link href="slambook.css" rel="stylesheet" type="text/css" />
</HEAD>     
<BODY>
<DIV id="header"><IMG class="XtGem logo" style="margin: 5px 0px 0px 5px;" alt="" 
src="sadakpramodh.jpg">         </DIV>
<DIV class="container">
<DIV class="account_management">                Account management is handled by 
<A href="<?php echo "$your_website_link"; ?>" target="_blank"><?php echo "$administrator_name"; ?></A>.      
           
<UL>
  <LI>Cookies must be enabled beyond this point.</LI>
  <LI>Please enter all fields in the form.</LI>
 <?php
		if(count($errors) > 0){
			
			foreach($errors as $e){
				echo "<li><font color='red'>  $e . </li></font>";
			}
			
		}
		?></UL></DIV>
<H3>Register:</H3>
<FORM action="" enctype="multipart/form-data" method="post">
<DIV>
<LABEL>Username:</LABEL>

<center><INPUT name="username" type="text" class="input"><BR>

<LABEL>Email</LABEL>

<INPUT name="email" type="email" class="email"><BR>

<LABEL>Password:</LABEL>

<INPUT name="password" type='password' class="input"><BR>

<LABEL>Confirm Password:</LABEL>

<INPUT name="c_password" type='password' class="input"><BR>

<LABEL>Security Quetion:</LABEL>

<INPUT name="securityquestion" type="text" class="input"><BR>

<LABEL>Security Answer:</LABEL>

<INPUT name="securityanswer" type='password' class="input"><BR>



<input type="text" name="ipaddress" width="25%" hidden="hidden" value="<?php $ip = $_SERVER['REMOTE_ADDR']; print $ip; ?>" />
<BR>
<input type="text" name="regdate" width="25%" hidden="hidden" value="<?php $date = date( 'Ymd-His' ); print $date; ?>" />

<INPUT name="login" class="submit" type="submit" value="Register"><BR><BR></center>

</DIV>
</FORM>
<DIV><A 
href="login.php"><font style='font-family:Segoe Script;'><b>Login</b></font></A><BR></DIV></DIV></BODY></HTML>
