<?

if (isset($pattern) && ($pattern)) {
	SetCookie("prevsearch",$pattern,0,"",".php.net");
}

if (isset($pattern) && ($pattern)) {
	$location = "http://marc.theaimsgroup.com/";
	if ($show=="maillist") {
		$query = "l=php-gtk&w=2&r=1&q=b&s=".urlencode($pattern);
		Header("Location: ".$location."?".$query);
		exit;
	}
}


?>