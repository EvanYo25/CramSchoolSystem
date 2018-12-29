<?php 
// header("Content-Type:tempnam(dir, prefix)xt/html; charset=utf-8");
	// echo var_dump($_POST),"<br>"; 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$myDB = "cramschooldb";
	$conn = new mysqli($servername, $username, $password, $myDB);
	$conn->query("SET NAMES UTF8");
        $id = ($_POST['id']);
        $name = ($_POST['editname']);
        $idnum = ($_POST['editid']);
        $sch = ($_POST['editsch']);


	$qry = "UPDATE students SET name='" .$name. "', idCardNum='" .$idnum. "', school='" .$sch. "' WHERE id='" .$id. "'";

	$result = $conn->query($qry); 
	// echo($result);
	if (!$result) { 
	    $errormessage = $conn->error; 
	    echo "Error with query: " . $errormessage;
	    exit(); 
	} 
	else{
		echo "修改資料成功"; 
		echo "<a href='signIn.php'>返回</a>";
	}


	$conn->close();
?>
