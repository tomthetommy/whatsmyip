<?php 
$ipAddress = $_SERVER['REMOTE_ADDR'];
if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
    $ipAddress = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
}


?>
<html>
<head>
<title> WhatsMyIP</title>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<style>
#footer {
    position: fixed;
    font-size:small;
    bottom: 0;
    font-family: 'Open Sans', sans-serif;
    width: 100%;
    background-color: blue;
    margin: 0 auto;
    text-align: center;
   color: white;
}
#ip {
    margin: 0 auto;
    font-family: 'Open Sans', sans-serif;
    text-align: center;
    font-size: 40px;
    width:50%;
    color: #0057ff;
    padding-top:20px;
}

#country {
    margin: 0 auto;
    font-family: 'Open Sans', sans-serif;
    text-align: center;
    font-size: 20px;
    width:50%;
    color: #0057ff;
    padding-top:20px;
}
img {
    margin: 0 auto;
    width: 60%;
    display: block;
   padding-top:76px;
}

#title {

font-family: 'Open Sans', sans-serif;
    text-align: center;
    font-size: 70px;
   color: #154d8d;
   background-color:rgba(164, 165, 166, 0.48);
}

body {
margin: 0;

}
</style>
</head>
<body>

<div>
<div id='title'>WhatsMyIP</div>
<div id='ip'><?php echo "IP: ".$ipAddress; ?></div>
<div id='country'><?php
$url = "https://freegeoip.net/json/$ipAddress";
$json = file_get_contents($url);
$obj = json_decode($json);
echo "Country: ".$obj->country_name;


?></div>
<div><img src='https://theanonymousrevolutionary.files.wordpress.com/2015/04/800px-map_non-aligned_movement.png'></div>
</div>
<div id='footer'>© 2017 | Design Tom Hughes</div>
<body>
</html>
