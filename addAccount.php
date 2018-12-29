<?php 
// header("Content-Type:tempnam(dir, prefix)xt/html; charset=utf-8");
	// echo var_dump($_POST),"<br>"; 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$myDB = "cramschooldb";
	$conn = new mysqli($servername, $username, $password, $myDB);
	$conn->query("SET NAMES UTF8");
        $acct = ($_POST['acct']);
        $passwd = ($_POST['passwd']);
        $type = ($_POST['type']);
        $student = ($_POST['stuCon']);
    if($type!='stu'){
    	$qry = "INSERT INTO member(account,password,iden) VALUES('" . $acct . "','" . $passwd . "','" . $type . "')";
    }
    else{
    	$qry = "INSERT INTO member(account,password,iden,stu) VALUES('" . $acct . "','" . $passwd . "','" . $type . "','" . $student . "')";
    }
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
