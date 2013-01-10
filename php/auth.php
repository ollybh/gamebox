<?php
/*
 * auth.php is included at the start of all password protected pages.
 * It starts a php session and then checks to see that the player is
 * logged in.
 */
	//Start session
	session_start();
	//Check whether the session variable SESS_PLAYER_ID is present or not
	if(!isset($_SESSION['SESS_PLAYER_ID']) || 
          (trim($_SESSION['SESS_PLAYER_ID']) == '')) {
    $denyloc = "location: http://" . $_SERVER['SERVER_NAME'];
    $denyloc .= "/BOARD18/access-denied.html";
		header($denyloc);
		exit();
	} else {
    $loggedinplayer = $_SESSION['SESS_PLAYER_ID'];
    $welcomename = $_SESSION['SESS_FIRST_NAME'];
    $headermessage = $_SESSION['SESS_HEADER_MESSAGE'];
    $_SESSION['SESS_HEADER_MESSAGE'] = '';
  }
?>
