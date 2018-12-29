<html>
<head>
<link rel="stylesheet" href="css/bootstrap.css">
<script src="jquery.js"></script>

<style>
.font{
		font-family: "Microsoft YaHei"
}
.called{
	background-color:red;
}
</style>
</head>
<body>
<a href='signIn.php'>回去首頁</a>
	<div class="containter">
		<div class="mt-4 row justify-content-center">
			<div class="col-6">
				<div class="row justify-content-center">
						<h2 class="font">學生點名</h2>
				</div>
			</div>
		</div>
		<div class="mt-4 row justify-content-center">
			<div class="col-6">
				<div class="row justify-content-center">
						<h6 class="font">黑板</h2>
				</div>
			</div>
		</div>
	 <table class="table mt-2 table-bordered">
	    <tbody>
<?php
			echo "<tr>";
			for($i=0;$i<10;$i++){
				echo "<td><form action='call.php' method='post' target='myIframe'><button onClick='window.location.reload()' id='A0".$i."' class='btn btn-primary btn-block'>A0".$i."</button><input type='hidden' name='id' value='A0".$i."'></form></td>";
			}
			echo "</tr>";

			echo "<tr>";
			for($i=0;$i<10;$i++){
				echo "<td><form action='call.php' method='post' target='myIframe'><button onClick='window.location.reload()' id='B0".$i."' class='btn btn-primary btn-block'>B0".$i."</button><input type='hidden' name='id' value='B0".$i."'></form></td>";
			}
			echo "</tr>";
			echo "<tr>";
			for($i=0;$i<10;$i++){
				echo "<td><form action='call.php' method='post' target='myIframe'><button onClick='window.location.reload()' id='C0".$i."' class='btn btn-primary btn-block'>C0".$i."</button><input type='hidden' name='id' value='C0".$i."'></form></td>";
			}
			echo "</tr>";
			echo "<tr>";
			for($i=0;$i<10;$i++){
				echo "<td><form action='call.php' method='post' target='myIframe'><button onClick='window.location.reload()' id='D0".$i."' class='btn btn-primary btn-block'>D0".$i."</button><input type='hidden' name='id' value='D0".$i."'></form></td>";
			}
			echo "</tr>";
			echo "<tr>";
			for($i=0;$i<10;$i++){
				echo "<td><form action='call.php' method='post' target='myIframe'><button onClick='window.location.reload()' id='E0".$i."' class='btn btn-primary btn-block'>E0".$i."</button><input type='hidden' name='id' value='E0".$i."'></form></td>";
			}
			echo "</tr>";
?>

	    </tbody>
	  </table>
	</div>
	<iframe style='visibility: hidden;' id='myIframe' name='myIframe'></iframe>  
</body>
</html>

<script>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$myDB = "cramschooldb";
	$conn2 = new mysqli($servername, $username, $password, $myDB);
	$conn2->query("SET NAMES UTF8");
	$data = $conn2->query("SELECT * FROM rollcall where class='math' && here='1'");
	// $row = $data->fetch_assoc();
	// echo htmlentities($row['gender']);
	for($i=1;$i<=$data->num_rows;$i++){
		$rs=$data->fetch_row();
?>
	var d = document.getElementById("<?php echo $rs[3]?>");
	d.className += " called";		
<?php
	}
?>
	// $("A05").click(function(){
	// 	alert("hello");
	// });

</script>