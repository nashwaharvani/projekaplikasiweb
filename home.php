<!DOCTYPE html>
<html>
<head><title> Membuat Form Login  dengan Javascript</title>
<link rel ="stylesheet" type = "text/css" href="style.css">
</head>
<body>
	<center>
</br>
<br/>
<center><h2>FROM LOGIN</h2></center>
<br/>
<center>
<div class ="login">
<br/>
<form action ="login.php" method = "post" onSubmit = "return validasi ()">
<div>
<label>Username: </label>
<input type ="text" name="username" id="username"/>
</div>
<div>
<label> password: </label>
<input type ="password" name="password" id="password" />
</div>
<div>
<input type="submit" value="Login" class="tombol"/>
</div>
</form>
</div>
<center>
</body>
<script type ="text/javascript">
function validasi (){
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	if(username!=""&&password!="") {
		return true;
	}else{
		alert('Username dan Password harus diisi');
		return false;}}
</script>
</html>