<?php
session_start();
if(!file_exists('users/' . $_SESSION['username'] . '.xml')){
	header('Location: login.php');
	die;
}

include("configuration.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $_SESSION['username']; ?> home</title>
<link href="slambook.css" rel="stylesheet" type="text/css" />
</head>
<body>

        <div id="header">
            <div><img src="sadakpramodh.jpg" alt="sadakpramodh"  style="margin: 5px 0 0 5px" />
            </div>
            
</div>
        
        <table width="100%" border="0">
          <tr>
            <td width="77%"><h2></h2></td>
            <td width="23%" class="usernamex">
              <h2><font color="#660099"><font style='font-family:Segoe Script;'>Welcome <?php echo $_SESSION['username']; ?></font></font></h2>
            </td>
          </tr>
          <tr>
            <td ></td>
            <td class="usernamex"><?php
    
	$xml = new SimpleXMLElement('users/' . $_SESSION['username'] . '.xml', 0, true);
$imagename=$xml->photoname;
?>
</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td class="usernamex">
              <p><a href="changepassword.php" >Change Password</a>
                -
  <a href="logout.php">Logout</a></p>
              </p>
            </td>
          </tr>
        </table>

 
 		</h2>
  





<hr />
<br />
<br />
<br />
<br />
<br />
<center><h1><a href="slambook.php" target="new"><font style='font-family:Segoe Script;'>Please fill slamBook.</font></a></h1></center>
<br />
<br />
<br />
<br />
<br />
<br />
<hr />
<table width="93%" border="0" align="center">
  <tr>
    <td width="31%"><?php
 
    if (getenv('HTTP_X_FORWARDED_FOR')) {
        $pipaddress = getenv('HTTP_X_FORWARDED_FOR');
        $ipaddress = getenv('REMOTE_ADDR');
echo "Your Proxy IP address is : ".$pipaddress. "(via $ipaddress)" ;
    } else {
        $ipaddress = getenv('REMOTE_ADDR');
        echo "Your IP address is : $ipaddress";
    }
$country = getenv('GEOIP_COUNTRY_NAME');
   
   echo "<br>Your country : $country";

?></td>
    <td width="31%"><center><b>&copy <?php echo "$rights_name - $year "; ?><b></center></td>
    <td width="31%"><center>

</center></td>
  </tr>
</table>



</body>
</html>