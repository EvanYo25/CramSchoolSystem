<?php 
// header("Content-Type:tempnam(dir, prefix)xt/html; charset=utf-8");
	// echo var_dump($_POST),"<br>"; 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$myDB = "cramschooldb";
	$conn = new mysqli($servername, $username, $password, $myDB);
	$conn->query("SET NAMES UTF8");
        $id = ($_POST['updstu']);
        $stu = ($_POST['stuCon2']);
    if($stu==-1){
		$qry = "UPDATE member SET  stu=NULL WHERE account='" .$id. "'";
    }
    else{
		$qry = "UPDATE member SET  stu='" .$stu. "' WHERE account='" .$id. "'";    	
    }


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
