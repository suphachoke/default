<?php
session_start();
if (!isset($_COOKIE['lang'])) {
    setcookie("lang", "th", time() + 86400, "/");
	$_COOKIE['lang'] = "th";
}
switch ($_COOKIE['lang']) {
    case "en":
        require_once './lang/lang.en.php';
        break;
    default :
        require_once './lang/lang.th.php';
        break;
}
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once './config.db.php';
require_once './functions.php';
$con = mysqli_connect($dbhost, $dbuser, $dbpass);
mysqli_select_db($con,$dbname);
mysqli_query($con,"SET NAMES UTF8");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>ชื่อหน่วยงานภายใน ชื่อองค์กรหลัก :: Department Name, Organization Name</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link rel="stylesheet" type="text/css" href="fonts/thsarabun/thsarabunnew.css"/>-->
		<link rel="icon" type="image/png" href="images/head_l1_logo.png">
		<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="stylesheet" type="text/css" href="jslibraries/jquery-ui-themes-1.11.4/themes/excite-bike/jquery-ui.min.css"/>
    </head>
    <body>
		<img class="logo" src="images/head_l1_logo.png"/>
        <div class="heading">
            <div class="left"></div>
            <div class="center">

            </div>
            <div class="right">

            </div>
        </div>
        <div class="navbar">
            <div class="left"></div>
            <div class="center">
                <ul class='mainnav'>
                    <!--<li><a href='index.php'><?= $nav_home ?></a></li>-->
                    <!--<li><a href='#sponsor'><?= $nav_sponsor ?></a></li>-->
                    <li><a href='#important'><?= $nav_important ?></a></li>
					<li><a href='#schedule'><?= $nav_schedule ?></a></li>
					<li><a href='#accommodation'><?= $nav_accommodation ?></a></li>
                    <!--<li><a href='#submission'><?= $nav_submission ?></a></li>-->
                    <li><a href='#committee'><?= $nav_committee ?></a></li>
                    <li><a href='submission/index.php'><?= $nav_login ?></a></li>
                    <li><a href='switchlang.php?lang=th'>TH</a>&nbsp;/&nbsp;<a href='switchlang.php?lang=en'>EN</a></li>
                </ul>
            </div>
            <div class="right">
                <div id="smallnav"><div></div><div></div><div></div></div>
            </div>
        </div>
