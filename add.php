<?php 
// header("Content-Type:tempnam(dir, prefix)xt/html; charset=utf-8");
	// echo var_dump($_POST),"<br>"; 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$myDB = "cramschooldb";
	$conn = new mysqli($servername, $username, $password, $myDB);
	$conn->query("SET NAMES UTF8");
        $name = ($_POST['name']);
        $idnum = ($_POST['idnum']);
        $school = ($_POST['school']);
        // echo ($jobs);

	if($_POST['sex']=='男'){
		$sex = true;
	}
	else if($_POST['sex']=='女'){
		$sex = false;
	}
	else{
		$sex = NULL;
	}
	// echo $sex;

	$qry = "INSERT INTO students(name,idCardNum,sex,school) VALUES('" . $name . "','" . $idnum . "','" . $sex . "','" . $school . "')";
	$result = $conn->query($qry); 
	// echo($result);
	if (!$result) { 
	    $errormessage = $conn->error; 
	    echo "Error with query: " . $errormessage;
	    exit(); 
	} 
	else{
		echo "新增資料成功"; 
		echo "<a href='signIn.php'>返回</a>";
	}


	$conn->close();
?>
