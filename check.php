<?php 
// header("Content-Type:tempnam(dir, prefix)xt/html; charset=utf-8");
	// echo var_dump($_POST),"<br>"; 
	session_start();
	if($_SESSION['name']){
		echo "check session: ".$_SESSION['name']."<br><br>";
		echo "<a href='signIn.php'>回去首頁</a>";
		unset($_SESSION['name']);
	}
	else{
		echo "你還沒登入<br>";
		echo "<a href='signIn.php'>回去首頁</a>";
	}
	
?>
