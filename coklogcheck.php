<?php

//if(!empty($_POST['hdnProcess']))

//{

setcookie("user1","ashok");

setcookie("user2","bharat");

setcookie("user3","cartoon");

setcookie("user4","dash");

setcookie("pass1","eswar");

setcookie("pass2","faran");

setcookie("pass3","gunamani");

setcookie("pass4","subhash");

$UserId = $_POST['Uname'];


$passwd = $_POST['password'];


//	setcookie("UserId", $_POST['Uname']);

//	setcookie("Passwd", $_POST['password']);
	
if( ($_COOKIE['user1']==$UserId && $_COOKIE['pass1']==$passwd ) || ($_COOKIE['user2']==$UserId && $_COOKIE['pass2']==$passwd ) || ($_COOKIE['user3']==$UserId && $_COOKIE['pass3']==$passwd )|| ($_COOKIE['user4']==$UserId && $_COOKIE['pass4']==$passwd ) ){
	echo "success";	
	}

else

{
	echo "failure"; 
	//setcookie("UserId",NULL,NULL); //setcookie("passwd",NULL,NULL);

}

//}

?>
