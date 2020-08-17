<?
class MathGuard {

	/** A main hashing function: concat of user's answer, hour and the additional prime number (default 37) */
	function encode($input, $prime) {
		return md5($input.date("H").$prime);
	}

	/** This function generates the hash code from the two numbers 
	 * @param $a 	first number
	 * @param $b	second sumber
	 * @param $prime	additional number to encode with
	 * */
	function generateCode($a, $b, $prime) {
		$code = MathGuard::encode($a + $b, $prime);
		return $code;
	}

	/** This function checks whether the answer and generated security code match 
	 * @param $mathguard_answer		answer the user has entered
	 * @param $mathguard_code		hashcode the mathguard has generated
	 */
	function checkResult($mathguard_answer, $mathguard_code, $prime = 37) {

//		echo("prime; $prime, $mathguard_answer");
		$result_encoded = MathGuard::encode($mathguard_answer, $prime);
		
		if ($result_encoded == $mathguard_code)
			return true;
		else
			return false;

	}

	/** this function inserts the two math term into your form, the parameter is optional */
	function insertQuestion($prime = 37) { //default prime is 37, you can change it when specifying the different parameter
		$a = rand() % 10; // generates the random number
		$b = rand() % 10; // generates the random number
		$code = MathGuard :: generateCode($a, $b, $prime);
		echo ("Spam Protection: Sum of $a + $b =
				<input type='input' name='T6' size='2'/><input type='hidden' name='pass' value='$code' />");

	}

	/** this function returns math expression into your form, the parameter is optional 
	 * quite simmilar to insertQuestion, but returns the output as a text instead of echoing
	 */
	function returnQuestion($prime = 37) { //default prime is 37, you can change it when specifying the different parameter
		$a = rand() % 10; // generates the random number
		$b = rand() % 10; // generates the random number
		$code = MathGuard :: generateCode($a, $b, $prime);
		return ("Spam Protection: Sum of $a + $b =
				<input type='input' name='T6' size='2'/><input type='hidden' name='pass' value='$code' />");

	}

}
?>
<?


?>

<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<meta name="GENERATOR" content="Microsoft FrontPage 6.0">

<meta name="ProgId" content="FrontPage.Editor.Document">

<title>Contact Us with a copy of your drawing of the forging you need and we will be happy to review your part and send a quote to you.</title>
<meta name="description" content="Contact KDK Forging for all your steel forging needs; we also supply a wide variety of forging parts which include struts, pins, bolts and fasteners. Our clientele includes different industries across the globe!">
<meta name="keywords" content="tie rod ends, tie rods, tie rod forging, forging company, forging, contact kdk forging company">
<meta name="robots" content="index, follow">
<link rel="stylesheet" type="text/css" href="includes/master.css">
<?php include('includes/externalfiles.inc'); ?>
<script language="JavaScript" src="includes/valform.js" type="text/javascript"></script>
<link rel="canonical" href="https://kdkforging.com/contact_us.php">

</head>

<body>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-3048155-1");
pageTracker._trackPageview();
} catch(err) {}</script>


<!--webbot bot="Include" u-include="includes/header.htm" tag="BODY" startspan -->
<div align="center">
	<table border="0" cellpadding="0" style="border-collapse: collapse" width="760">
		<tr>
			<td height="80" width="364">
			<p class="MsoNormal">&nbsp;</p>
			<p class="MsoNormal">
			<h1 style="font-weight:normal; margin-bottom:0px;"><span style="font-size: 24.0pt; font-family: Verdana; color: gray">

			KDK</span><span style="font-size: 24.0pt; font-family: Verdana; color: maroon">forging</span><span style="font-size: 24.0pt; font-family: Verdana; color: silver">company</span></h1></td>
			<td width="396" height="80"></td>
		</tr>

		<tr>
			<td colspan="2" class="phone">Phone: 708.388.8770</td>
		</tr>

		<tr>
			<td class="topnav2" colspan="2">
			<table border="0" cellpadding="0" style="border-collapse: collapse" width="90%" align="center">
				<tr>
					<td width="100%">					

					</td>
				</tr>
			</table>
			</td>
		</tr>
	</table>
</div>

<div align="center">
	<table border="0" cellpadding="0" style="border-collapse: collapse" width="759" height="125"><tr><td>

			<table border="0" cellpadding="0" style="border-collapse: collapse" width="100%" height="125">

				<tr>

					<td width="100%" height="22" class="topnav3" valign="bottom">

					</td>

					<td rowspan="2" class="colorbox" valign="top" width="201" height="125">

					<img border="0" src="images/hotshafts.jpg" width="198" height="132" alt="Contact Us for Forging Parts"></td>

				</tr>

				<tr>

					<td width="100%" class="colorbox" height="110">

					<table border="0" cellpadding="0" style="border-collapse: collapse" width="100%">

						<tr>

							<td valign="top">

							<img border="0" src="images/5x5.gif" width="5" height="5"><img border="0" src="images/5x5.gif" width="5" height="5"></td>

							<td class="colorboxtext" width="100%">FOR INFORMATION ABOUT OUR CLOSED DIE FORGINGS, PLEASE VISIT <a href="index.html">KDKforging.com</a> </td>

						</tr>

						<tr>

							<td valign="top" height="20">&nbsp;</td>

							<td width="100%" height="20">

							<p align="justify" class="banner">
<!--webbot bot="Navigation" s-type="banner" s-orientation="horizontal" s-rendering="graphics" startspan -->Contact Us<!--webbot bot="Navigation" i-checksum="45912" endspan -->
							</p>

							</td>

						</tr>

					</table>

					</td>

				</tr>

			</table>

			</td></tr><tr><td height="20">&nbsp;</td></tr></table>

	<table border="0" cellpadding="0" style="border-collapse: collapse" width="759" height="444" align="center" class="textarea1">
	<tr>
		<td width="50%" valign="top" class="colorboxtext">
		
		<div style="margin-left:30px;">
		<strong>Address</strong>:<br>
		<span style="margin-left:40;">2645 W. 139th Street,</span><br>
		<span style="margin-left:40;">Blue Island, IL, 60406</span><br><br>
										 
		<strong>Phone</strong>: 708-388-8770 <br>
		<strong>Fax</strong>: 708-388-7658<br>		
		<strong>Email</strong>: info@kdkforging.com<br><br><br><br>
		<p align="center"><a href="/bolts.php"><img border="0" src="images/Bolts-1.jpg" width="270" height="144" alt="Contact Us for Bolts"></a></p>
		</div>
		</td>
		
			<td height="100%" style="background-color: #FFFFFF" align="center" nowrap valign="top">			
					
					<table cellpadding="10" cellspacing="0" border="1" style="border:1px #333333; margin-top:10px;" width="75%"><tr><td width="100%">
					
			
					
								</td></tr></table>
								<br>		
			</td>
			
			
		</tr>
		
		</table>
</div>

<div align="center">

	<table border="0" cellpadding="0" style="border-collapse: collapse" width="760">

		<tr>

			<td>&nbsp;</td>

		</tr>

		<?php include('includes/footer.php'); ?>


</body>



</html>