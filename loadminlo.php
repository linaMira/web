
<?php
//connect db
$con = mysqli_connect('localhost','root','','ecomerce');
//post value
$a_name =@$_POST['a_name'];
$a_pass =@$_POST['a_pass'];
if(isset($_POST['loar'])){
    if(empty($a_name) OR empty($a_pass)){
        echo '<script> alert("remplir!")</script>'    ;}
        else{
            //get admin name &pass
            $get_admin="select * from admin  where a_name ='$a_name' AND a_pass='$a_pass'";
            $run_admin=mysqli_query($con, $get_admin);
            //admin isset
            if(mysqli_num_rows($run_admin) == 1){
               $row_admin = mysqli_fetch_array($run_admin);
               //admin value isset
               $aname = $row_admin['a_name'];
               //cookie here
               setcookie ("aname" ,$aname,time()+60*60*24);
               setcookie ("adminlogin" ,1,time()+60*60*24);
               header("Location:heeder.php");
               echo'<script>   alert ("hello agin")        </script>';


            }  
            else{   
            echo'<script>  alert  ("eroor")        </script>';
            }
        
        
        }
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>login</title>
 
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background-image:  linear-gradient( 180deg, #B572A1, #AFBBF2 100%);
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #B572A1,
        #AFBBF2
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
 input[type="submit"]{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}

    </style>
</head>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
<body>
      <form action="loadminlo.php" method="post">

  
        <h3>Welcome admin!</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="username" name="a_name">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="a_pass">

       <input class="button"  type="submit" name="loar" value="Log in">
    </form>
</body>
</html>
