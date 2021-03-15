//this is the index/page handler this file should have most common code accross your site such as header and footer. Also does 404 errors (; 
//Header where you preload everything the page needs
<head>
//sylesheet ref to link the css to the page
<link href="/assets/style.css" rel="stylesheet">
//seting fav icon
<link rel="icon" type="image/png" href="assets/logo.png"/>
</head>
//body where your site lives
<body>
//using php we will get the header php and import it onto the page
<?php include 'assets/header.php'?>
//main page handler code. home.php is the the default page when hitting your site.
<?php
$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'],'/')) : '/';
if($url[0] == "/") {
include "home.php";
} else{
if(file_exists($url[0] . '.php')) {
include $url[0] . ".php";
} else {
 
 include '404.php';   
    
}
}
?>
//using php we will get the footer php and import it onto the page
<?php include 'assets/footer.php'?>
</body>
