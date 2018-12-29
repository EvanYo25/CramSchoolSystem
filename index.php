<link rel="stylesheet" href="css/bootstrap.css">
<style>
.font{
		font-family: "Microsoft YaHei"
}
</style>
<html>
	<div class="containter">
		<div class="mt-4 row justify-content-center">
			<div class="col-6">
				<div class="row justify-content-center">
						<h2 class="font">會員登入</h2>
				</div>
				<form action="login.php" method="post">
					<div class="mt-4 form-group row justify-content-center">
						<label class="col-2 col-form-label font">帳號</label>
						<div class="col-6">
							<input class="form-control" name="account" size=10 maxlength=20>
						</div>
				    </div>
					<div class="form-group row justify-content-center">
						<label class="col-2 col-form-label font">密碼</label>
						<div class="col-6">
							<input class="form-control"  name="password" size=10 maxlength=20>
						</div>
				    </div>

				    <div class="row justify-content-around mt-4">
				    	<div class="col-2">
				    	<button class="font btn-block btn btn-primary" type="reset" name="reset">重設</button>
				    	</div> 
				    	<div class="col-2">
				    	<button class="font btn-block btn btn-primary" type="submit" name="submit">登入</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</html>