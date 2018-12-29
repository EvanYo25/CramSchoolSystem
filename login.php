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
        $account = ($_POST['account']);
        $password = ($_POST['password']);

    $qry = "SELECT * FROM member where account='".$account."' && password='".$password."'";
    // echo $qry;
	$result = $conn->query($qry);

	if($result->num_rows==0){
		echo("Fail to Login!")."<br>";
        echo "<a href='index.php'>重新登入</a>";
	}
	else{
		echo("Login Success")."<br>";
		$row = $result->fetch_array(MYSQLI_ASSOC);
		echo "Welcome, ".$row["account"]."!<br>";

		$_SESSION['name']=$row["account"];
		$_SESSION['iden']=$row["iden"];
		if($_SESSION['iden']=='stu'){
			$_SESSION['id']=$row["stu"];
		}
		// echo "check session: ".$_SESSION['name']."<br><br>";
        echo "<a href='signIn.php'>進入首頁</a>";

		// echo "destroy session";
		// unset($_SESSION['name']);
		// echo "check session: ".$_SESSION['name'];
	}
        $conn->close(); 

?>



