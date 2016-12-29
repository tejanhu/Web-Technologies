<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 //EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
<title>Browser Finder</title>
</head>
<body>

<?php

$user_agent = $_SERVER['HTTP_USER_AGENT'];

if (preg_match('/MSIE/i', $user_agent)) {
   echo "Your browser is Microsoft Internet Explorer";
}
else if(preg_match('/Firefox/i', $user_agent)){
   echo "Your browser is Microsoft Firefox";
}
else if(preg_match('/Chrome/i', $user_agent)){
   echo "Your browser is Google Chrome";
}
else {
   echo "You`re using a browser thats not Microsoft Internet Explorer, Mozilla Firefox or Google Chrome";
}

?>
</body>
</html>
