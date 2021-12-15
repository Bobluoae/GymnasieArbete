<?php 
session_start();
include "logic/database.php";
//log a user in
include "logic/inloggning.php";


//log out a user



//add restaurant



//remove restaurant



if (!isset($_GET["page"])) {
    $_GET["page"] = "";
}
include "visual/header.php";
include "visual/navbar.php";
if ($_GET["page"]=="info") {
	include "visual/pages/info.php";
} 
else if($_GET["page"]=="restaurant"){
	include "visual/pages/restaurant.php"; 
} 
else if($_GET["page"]=="randomize"){
	include "visual/pages/randomize.php"; 
} 
else if($_GET["page"]=="inlogg"){
	include "visual/pages/inlogg.php"; 
} else
include "visual/pages/home.php";
include "visual/footer.php";

