<?
function browser_detection( $which_test ) {
	// initialize the variables
	$browser = '';
	$dom_browser = '';

	// set to lower case to avoid errors, check to see if http_user_agent is set
	$navigator_user_agent = ( isset( $_SERVER['HTTP_USER_AGENT'] ) ) ? strtolower( $_SERVER['HTTP_USER_AGENT'] ) : '';

	// run through the main browser possibilities, assign them to the main $browser variable
	if (stristr($navigator_user_agent, "opera")) 
	{
		$browser = 'opera';
		$dom_browser = true;
	}
	elseif (stristr($navigator_user_agent, "msie 4")) 
	{
		$browser = 'msie4'; 
		$dom_browser = false;
	}
	elseif (stristr($navigator_user_agent, "msie")) 
	{
		$browser = 'msie'; 
		$dom_browser = true;
	}
	elseif ((stristr($navigator_user_agent, "konqueror")) || (stristr($navigator_user_agent, "safari"))) 
	{
		$browser = 'safari'; 
		$dom_browser = true;
	}
	elseif (stristr($navigator_user_agent, "gecko")) 
	{
		$browser = 'mozilla';
		$dom_browser = true;
	}
	elseif (stristr($navigator_user_agent, "mozilla/4")) 
	{
		$browser = 'ns4';
		$dom_browser = false;
	}
	else 
	{
		$dom_browser = false;
		$browser = false;
	}
	// return the test result you want
	if ( $which_test == 'browser' )
	{
		return $browser;
	}
	elseif ( $which_test == 'dom' )
	{
		return $dom_browser;
		//  note: $dom_browser is a boolean value, true/false, so you can just test if
		// it's true or not.
	}
}
$user_browser = browser_detection('browser');
if ( $user_browser == 'mozilla' )
{
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
}
else
{
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Content-Type: image/png");
header("Pragma: no-cache");
}

$im = imagecreate(60, 23);
$white = imagecolorallocate($im, 0, 0, 0); 
$gray = imagecolorallocate($im, 179, 162, 154); 

srand((double)microtime()*1000000);  
$string = md5(rand(18000,20999));  
$new_string = substr($string, 17, 5);  
imagefill($im, 0, 0, $gray); 
imagestring($im, 4, 11, 4, $new_string, $white); 

$totalfiles = count(glob("codeimage/{*.db, *.png}", GLOB_BRACE));
$d = opendir('codeimage');
while(false != ($f = readdir($d))){
	if ($f == "." || $f == "..")
	continue;
	unlink("codeimage/".$f);
}
closedir($d);

$new_image = "codeimage/".$new_string.".png";
imagepng($im, $new_image);
imagedestroy($im);
?>