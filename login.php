<center><h2><b>Log In</b></h2></center>
<?php
	//memulai session
	session_start();
	//cek adanya session, jika session sudah ada ,aka diserahkan ke index.php
	if(ISSET($_SESSION['username'])){
		header("location:index.php");
	}
?>
<form method="post" action="client.php">
	<table border="0" align="center" cellpadding="5" cellspacing="8">
		<tr>
			<td>Username :</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password : </td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td colspan="2" align="center" height="10">
				<input type="submit" name="submit" value="Log In">
			</td>
		</tr>
	</table>
</form>