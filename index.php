//this is the index/page handler this file should have most common code accross your site such as header and footer. Also does 404 errors (; 
//Header where you preload everything the page needs
<head>
//sylesheet ref to link the css to the page
<link href="/assets/style.css" rel="stylesheet">
 //embed and global site info
//setting favicon
 <link rel="icon" type="image/png" href="assets/logo.png"/>
    lookup des
    <meta name="description" content="sample text">
    <meta http-equiv="content-language" content="en-us">
    //site name that will show in lookup and discord
    <meta property="og:title" content="Name" />
    <meta property="og:type" content="website" />
    //embed color
    <meta property="og:color" content="#90EE90" />
    //What is shown as description on discord
    <meta property="og:description" content="sample text 2" />
    <meta property="og:url" content="https://your.site" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,700,800" rel="stylesheet" type="text/css">
    <meta name="theme-color" content="#00D166" />
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
