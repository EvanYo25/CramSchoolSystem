<?php 
// header("Content-Type:tempnam(dir, prefix)xt/html; charset=utf-8");
	// echo var_dump($_POST),"<br>"; 
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$myDB = "cramschooldb";
	$conn = new mysqli($servername, $username, $password, $myDB);
	$conn->query("SET NAMES UTF8");
        $id = ($_POST['id']);

	$qry = "SELECT * FROM rollcall where seat='".$id."' && here='0'";
    echo $qry;
	$result = $conn->query($qry);

	if($result->num_rows==0){
		echo("點名失敗!")."<br>";
        echo "<a href='rollcall.php'>返回</a>";
	}
	else{
    	$qry2 = "UPDATE rollcall SET here=1 where seat='".$id."'";
    	$result = $conn->query($qry2);
    	echo $result;


	}
        $conn->close(); 
?>


