<link rel="stylesheet" href="css/bootstrap.css">
<style>
.font{
		font-family: "Microsoft YaHei"
}
</style>
<?php 
// header("Content-Type:tempnam(dir, prefix)xt/html; charset=utf-8");
	// echo var_dump($_POST),"<br>"; 
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$myDB = "cramschooldb";
	$conn = new mysqli($servername, $username, $password, $myDB);
	if (!$conn) {
		echo "error!";
	}
	else{
		// echo "connection success";
	}

	if(!$_SESSION['name']){
		echo "你還沒登入<br>";
		echo "<a href='index.php'>回去首頁</a>";
		unset($_SESSION['name']);
	}
	else{
	if($_SESSION['iden']=='stu'){
		echo "您好: ".$_SESSION['name']."  ";
		echo "帳號身分: ".$_SESSION['iden']."  ";
		echo "學生id: ".$_SESSION['id']."  ";
		echo "<a href='index.php'>登出</a>";
?>

	<link rel="stylesheet" href="css/bootstrap.css">
	<style>
	.font{
			font-family: "Microsoft YaHei"
	}
	</style>

	<div class="containter">
		<div class="mt-4 row justify-content-center">
			<div class="col-6">
				<div class="row justify-content-center">
						<h2 class="font">學生成績表-<?php echo $_SESSION['name']?></h2>
				</div>
			</div>
		</div>

	 <table class="table mt-2 table-bordered">
	 	<thead>
	      <tr>
	        <th>科目</th>
	        <th>成績</th>
	        <th>班平均</th>
	        <th>標準差</th>
	        <th>名次</th>
	      </tr>
	    </thead>
	    <tbody>
	    	<tr>
		    	<td>國二下數學-小考(1)</td>
		    	<td>90</td>
		    	<td>83.3</td>
		    	<td>6.2</td>
		    	<td>6</td>
		    </tr>
	    	<tr>
		    	<td>國二下理化-小考(1)</td>
		    	<td>100</td>
		    	<td>86.5</td>
		    	<td>7.4</td>
		    	<td>1</td>
		    </tr>
	    	<tr>
		    	<td>國二下數學-小考(2)</td>
		    	<td>94</td>
		    	<td>72</td>
		    	<td>9.1</td>
		    	<td>1</td>
		    </tr>
	    	<tr>
		    	<td>國二下英文-小考(1)</td>
		    	<td>90</td>
		    	<td>81.9</td>
		    	<td>8.2</td>
		    	<td>10</td>
		    </tr>
	    </tbody>

	  </table>
	</div>
	<div class="containter">
		<div class="mt-4 row justify-content-center">
			<div class="col-6">
				<div class="row justify-content-center">
						<h2 class="font">缺席紀錄-<?php echo $_SESSION['name']?></h2>
				</div>
			</div>
		</div>

	 <table class="table mt-2 table-bordered">
	 	<thead>
	      <tr>
	        <th>日期</th>
	        <th>課程名稱</th>
	      </tr>
	    </thead>
	    <tbody>
	    	<tr>
		    	<td>2018/06/20</td>
		    	<td>國二下數學-第1堂</td>
		    </tr>
	    </tbody>

	  </table>
	</div>

<?php
	}
	if($_SESSION['iden']=='cram'){
		echo "您好: ".$_SESSION['name']."  ";
		echo "帳號身分: ".$_SESSION['iden']."  ";
		echo "<a href='index.php'>登出</a>";
		echo "<br><button class='btn btn-primary' type='' name='submit' ><a style='color:white' href='rollcall.php'>點名去</a></button>";
	}
	if($_SESSION['iden']=='admin'){
		echo "您好: ".$_SESSION['name']."  ";
		echo "帳號身分: ".$_SESSION['iden']."  ";
		echo "<a href='index.php'>登出</a>";
		echo "<br><button class='btn btn-primary' type='' name='submit' ><a style='color:white' href='rollcall.php'>點名去</a></button>";
?>
<html>
<head>
	<title>補教管理系統</title>
	<!-- <link rel="stylesheet" type="text/css" href="style6.css"> -->
	<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> -->
</head>




<body>
<div class="container font">
<div class="row">
<div class="col-md-6">
<form action="add.php" method="post">
<!-- <form action="add.php" method="post" target="nm_iframe"> -->
<table class="table table-bordered" width="300px"  style="text-align:center; border-collapse: collapse;">
	<thead class="thead-dark">
	<tr>

		<th colspan="2">學生註冊</td>
	</tr>
	</thead>
	<tr>
		<td>名字</td>
		<td><input name="name" size=10 maxlength=20></td>
	</tr>
	<tr>
		<td>身分證字號</td>
		<td><input name="idnum" size=10 maxlength=20></td>
	</tr>
	<tr>
		<td>性別</td>
		<td>
			<input name="sex" type=radio value="男" checked>男
			<input name="sex" type=radio value="女">女
		</td>
	</tr>
	<tr>
		<td>就讀學校</td>
		<td><input name="school" size=10 maxlength=20></td>
	</tr>
	<tr>
		<td colspan="2">
			<input type="reset" name="reset" value="重設">
			<input type="submit" name="submit" value="遞交">
		</td>
	</tr>

</table>
</form>

</div>
<!-- <iframe id="id_iframe" name="nm_iframe" style="display:none;"></iframe> -->
<br>


<div class="col-md-6">
<form action="addAccount.php" method="post">
<!-- <form action="add.php" method="post" target="nm_iframe"> -->
<table class="table table-bordered" width=300px; style="text-align:center; border-collapse: collapse;">
	<thead class="thead-light">
	<tr>

		<th colspan="2">帳號註冊</td>
	</tr>
	<tr>
		<td>新建帳號</td>
		<td><input name="acct" size=10 maxlength=20></td>
	</tr>
	<tr>
		<td>輸入密碼</td>
		<td><input type="password" name="passwd" size=10 maxlength=20></td>
	</tr>
	<tr>
		<td>帳號類別</td>
		<td>
			<select name="type">
				<option value="choose">---請選擇---</option>
				<option value="stu">學生</option>
				<option value="cram">補習班端</option>
				<option value="admin">管理員</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>學生連接</td>
		<td>
			<select name="stuCon">
				<option value="none">---無---</option>
<?php
		$conn->query("SET NAMES UTF8");
		$data = $conn->query("select * from students");
		for($i=1;$i<=$data->num_rows;$i++){
			$rs=$data->fetch_row();
?>
				<option value="<?php echo $rs[4]?>"><?php echo $rs[0]?></option>
<?php
		}
?>
			</select>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<input type="reset" name="reset" value="重設">
			<input type="submit" name="submit" value="遞交">
		</td>
	</tr>

</table>
</form>
</div>
</div>
</div>
<!-- <iframe id="id_iframe" name="nm_iframe" style="display:none;"></iframe> -->
<br>



<?php
	}
	if($_SESSION['iden']=='admin' || $_SESSION['iden']=='cram'){
?>

<div class="container font">
<div class="row justify-content-center">
<table class="col-10 table table-striped table-bordered">
	<thead class="bg-warning">
	<tr>
		<th colspan="7">學生資料表</td>
	</tr>
	<tr>
		<th>ID</th>
		<th>名字</th>
		<th>身分證字號</th>
		<th>性別</th>
		<th>畢業高中</th>
		<th>update</th>
		<th>delete</th>
	</tr>
	</thead>
<?php
$conn->query("SET NAMES UTF8");
$data = $conn->query("select * from students");
// $row = $data->fetch_assoc();
// echo htmlentities($row['gender']);
for($i=1;$i<=$data->num_rows;$i++){
	$rs=$data->fetch_row();
?>
<form action="edit.php" method="post">
  <tr>
  	<td><?php echo $rs[4]?></td>
    <td><input type="text" name="editname" size=8 value="<?php echo $rs[0]?>"></td>
    <td><input type="text" name="editid" size=10 value="<?php echo $rs[1]?>"></td>

<?php
	if($rs[2]==1) $gen="男";
	else if($rs[2]==0) $gen="女";
?>
    <td><?php echo $gen?></td>
    <td><input type="text" name="editsch" size=6 value="<?php echo $rs[3]?>"></td>
    <td><button class="btn btn-block btn-primary" type="submit" name="submit" >修改</button>
    	<input type="hidden" name="id" value="<?php echo $rs[4]?>"></td></form>

    <td><form action="delete.php" method="post">
    	<button class="btn btn-block btn-primary" type="submit" name="submit" >刪除</button>
    	<input type="hidden" name="id" value="<?php echo $rs[4]?>"></form></td>
  </tr>
<?php
}
	$conn->close();
?>
</div>
</div>


<div class="container font">
<div class="row justify-content-center">
<table class="col-10 table table-striped table-bordered">

	<thead class="bg-info">
	<tr>
		<th colspan="6">帳號資料表</td>
	</tr>
	<tr>
		<th>帳號</th>
		<th>密碼</th>
		<th>帳號權限</th>
		<th>連接學生</th>
		<th>update</th>
		<th>delete</th>
	</tr>
	</thead>
<?php
$conn2 = new mysqli($servername, $username, $password, $myDB);
$conn2->query("SET NAMES UTF8");
$data = $conn2->query("select * from member");
// $row = $data->fetch_assoc();
// echo htmlentities($row['gender']);
for($i=1;$i<=$data->num_rows;$i++){
	$rs=$data->fetch_row();
?>
  <tr>
    <td><?php echo $rs[0]?></td>
<?php
$str="";
for($j=0;$j<strlen($rs[1]);$j++){
    if($j<4){
    	$str=$str.'*';
    }
    else{
    	$str=$str.$rs[1][$j];
    }
}
?>
	<td><?php echo $str ?></td>
    <td><?php echo $rs[2]?></td>
    <td><form action="updateAccount.php" method="post">
		<select name="stuCon2">
		
<?php
	$conn3 = new mysqli($servername, $username, $password, $myDB);
	$conn3->query("SET NAMES UTF8");
	$data2 = $conn3->query("select * from students");
	if($rs[3]==NULL)	echo "<option value='-1'>---無---</option>";
	else{
		echo "<option value='".$rs[3]."'>ID--".$rs[3]."--</option>";
		echo "<option value='-1'>---無---</option>";
	} 
	for($j=1;$j<=$data2->num_rows;$j++){
		$rs2=$data2->fetch_row();
?>
		<option value="<?php echo $rs2[4]?>"><?php echo $rs2[4].$rs2[0]?></option>
<?php
	}
	$conn3->close();
?>
		</select></td>
	<td>
		<input type="hidden" name="updstu" value="<?php echo $rs[0]?>"><button class ="btn btn-block btn-primary" type="submit" name="submit">更新</button></form>
	</td>
    <td><form action="deleteAccount.php" method="post">
    	<button class="btn btn-block btn-primary" type="submit" name="submit">刪除</button>
    	<input type="hidden" name="delacct" value="<?php echo $rs[0]?>"></form></td>

<?php
}
	$conn2->close();
?>
</div>
</div>

</body>
</html>


<?php
	}
}
?>