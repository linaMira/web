<?php
include "files/header.php" ;
?>
            <?php 
   //////////////////////////////////////////////////////////////////////////////////////////////////////////////
   $username =@$_POST['username'];
$password =@$_POST['password'];

 if(isset($_POST['login'])){
   if(empty($username) || empty($password)){
	echo '<script> alert("please fill al gaps")</script>';
}
else{
	$select_c = "select * from customers where username ='$username' AND password='$password'";
	$run_c=mysqli_query($connect,$select_c);
	if(mysqli_num_rows($run_c) <0){
	$row_c=mysqli_fetch_array($run_c);
	$user =$row_c['username'];
	$pass=$row_c['password'];
	if($user!=$username && $pass!=$password){
		echo'<script> alert("wrong fill")</script>';

	}
	else{
		setcookie("user",$user,time()+60*60*24);
		setcookie("login",1,time()+60*60*24);
		echo'<script> alert("hellooo welcome bro")</script>';

	}
	}
	else{
		echo'<script> alert("wrong fill")</script>';

	}
}
 }



?>









<form action="" method="post">

<span>or use your account</span>
			<input type="email" placeholder="Email" name="email"/>
			<input type="password" placeholder="Password" name="password" />
			<a href="#">Forgot your password?</a>
			<input type="submit" name="login" placeholder="Sign In"> 
</form>