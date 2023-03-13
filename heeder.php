<?php

$db = mysqli_connect('localhost','root','','ecomerce');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scal e=1.0">
    <!-- <link rel="stylesheet" href="/project memoir/css/all.css">
    <link rel="stylesheet" href="/project memoir/css/all.min.css">
    <link rel="stylesheet" href="/project memoir/css/project.css" >-->
    <link rel="stylesheet" href="/yabi/issam.css">
    <link rel="stylesheet" href="/projectmemoir/alli.css">
    <link rel="stylesheet" href="./allim.css">
    
    <title>Panneau de contrôle</title>
    <script src="https://kit.fontawesome.com/c066500fec.js" crossorigin="anonymous"></script>



    </head>
<body> 
<style>
h2.mama{
  color:
}
*, *:before, *:after {
  box-sizing: inherit;
  text-decoration:none;
}
*{
    position: relative;
  margin: 0;
  padding: 0; 
box-sizing: border-box;
font-family: sans-serif;
}
body{

background: #E9DBF6  ;  
}
h1{
Text-align:center;
padding:5mm;
}
.admin-menu{
font-size:25px;
left:3mm;
}
.admin-menu a{
color:black;


}
.admin-menu ul li{
display:inline;
padding:20px;
}
.admin-menu a i{
color:purple;
letter-spacing:2mm;
line-height: 2.5;

}


</style>   

         <!------------------------------- NAVBAR -------------------------------------------->

   <!------------------------------- NAVBAR -------------------------------------------->
   <div id="mira">
   <div id="nvbar">
     
        <ul>
            <span ><li> à propos de<span > Blom<i class="fab fa-google-wallet"></i>Shop</li></span></span>
            <li>Aide  <i class="fa-regular fa-circle-question"></i></li>
        </ul>   
              <span id="nvbar4">contactez-nous: 0560501477 |0540732432</span>
   </div>
    
     <!--------------------------------end----------------------------------------------->
     <!------------------------------- search-------------------------------------------->
    <nav id="menu" >
      
     <div class="logo">Blom<i class="fab fa-google-wallet"></i>Shop </div>


       <div class="search-box">
         
          <input type="search" placeholder="chercher ici"  >
          <input type="submit"name="" value="chercher"  >
       
        
      </div>
     <div class="zara">
      <li class="bb"><a href="#" ><i class="fa-solid fa-bars"></i> </a>
            
        <ul>
              <li> <a href="#"><i class="far fa-user"></i>mon compte</a></li>
              <li> <a href="/project memoir/login.php"> <i class="fas fa-sign-in"></i>se connecter</a></li>
              <li> <a href="#"><i class="fa-solid fa-heart"></i> Favorite </a></li>
              <li ><a href="#"> <i class="fa-solid fa-cart-arrow-down"></i> panier</a></li>
            </ul>
        
 </li>
</div>
     <div class="colori">

        <ol>
           <li ><a href="issam.php"> <i class="fa-solid fa-house"> </i></a> </li>
           <li class="bb"><a href="#" ><i class="fa-solid fa-user"></i> </a>
            
                   <ul>
                         <li> <a href="#"><i class="far fa-user"></i>mon compte</a></li>
                         <li> <a href="loadminlo.php"> <i class="fas fa-sign-in"></i>se connecter</a></li>
                         <li> <a href="#"><i class="far fa-bell"></i> notification </a></li>
                         
                     </ul>
            </li>
                   <li ><a href="#" ><i class="fa-solid fa-heart"></i> </a></li>
                  <li ><a href="#"> <i class="fa-solid fa-cart-arrow-down"></i> </a></li>

                </div>        </ol>
      </div>     
      </nav> 
    </div>
  </div>

<div> <h1>Panneau de contrôle </h1></div> 
<div class="admin-menu">
  <ul>
  <li><a href="addpro.php"><i class="fa-solid fa-circle-plus"></i>ajouter produit 1</a> </li>
  <li><a href="addpro2.php"><i class="fa-solid fa-circle-plus"></i>ajouter produit 1</a> </li>
    <li><a href="addcat.php"><i class="fa-solid fa-circle-plus"></i>ajouter classement</a> </li>

  </ul>

</div>
