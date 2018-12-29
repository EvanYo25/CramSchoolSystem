<?php 
// header("Content-Type:tempnam(dir, prefix)xt/html; charset=utf-8");
	// echo var_dump($_POST),"<br>"; 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$myDB = "cramschooldb";
	$conn = new mysqli($servername, $username, $password, $myDB);
	$conn->query("SET NAMES UTF8");
        $idnum = ($_POST['id']);


	$qry = "DELETE FROM students WHERE id='" .$idnum. "'";
	$qry2 = "UPDATE member SET stu=NULL WHERE stu='" .$idnum. "'";

	$result = $conn->query($qry); 
	$result2 = $conn->query($qry2); 
	// echo($result);
	if (!$result && !$result2) { 
	    $errormessage = $conn->error; 
	    echo "Error with query: " . $errormessage;
	    exit(); 
	} 
	else{
		echo "刪除資料成功"; 
		echo "<a href='signIn.php'>返回</a>";
	}


	$conn->close();
?>
