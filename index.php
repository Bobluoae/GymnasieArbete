<?php
session_start();
include "logic/database.php";
//log a user in
$error = false;

include "logic/reg.php";
include "logic/inloggning.php";

//add restaurant
if (isset($_GET["ajax"])){
	include "logic/ajax.php";
}
//remove restaurant


if (!isset($_GET["page"])) {
    $_GET["page"] = "";
}
include "visual/header.php";
include "visual/navbar.php";
if ($_GET["page"]=="info") {
	include "visual/pages/info.php";
}
else if($_GET["page"]=="inlogg"){
	include "visual/pages/inlogg.php"; 
}
else if($_GET["page"]=="list"){
	include "visual/pages/list.php"; 
}
else if($_GET["page"]=="regpage"){
	include "visual/pages/regform.php"; 
}
else if($_GET["page"]=="welcome"){
	include "visual/pages/welcome.php"; 
} else
include "visual/pages/home.php";
include "visual/footer.php";