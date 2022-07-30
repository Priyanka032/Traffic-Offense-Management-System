<?php
	
	session_start();
	
	
	$errmsg_arr = array();
	
	
	$errflag = false;
	
	
	$link = mysql_connect('localhost','root',"");
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	
	$db = mysql_select_db('DATABASE', $link);
	if(!$db) {
		die("Unable to select database");
	}
	
	
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	
	$login = clean($_POST['username']);
	$password = clean($_POST['pass']);
	
	
	if($login == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
	
	
	$qry="SELECT * FROM user WHERE username='$login' AND pass='$password'";
	$result=mysql_query($qry);
	
	
	if($result) {
		if(mysql_num_rows($result) > 0) {
			
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['name'];
			$_SESSION['SESS_LAST_NAME'] = $member['position'];
			$_SESSION['SESS_PRO_PIC'] = $member['username'];
			session_write_close();
			header("location: index.php");
			exit();
		}else {
			
			header("location: login.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>