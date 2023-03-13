

<?php

include "files/header.php" ;
?>




   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
 </head>
 <body>

<header id="site-header">

    <style>
        body {
  background: #eee;
  margin: 0;
  padding: 0;
  overflow-x: hidden;
}

.clearfix {
  content: "";
  display: table;
  clear: both;  
}

#site-header, #site-footer {
  background: #fff;
}

#site-header {
  margin: 0 0 30px 0;
}

#site-header h1 {
  font-size: 31px;
  font-weight: 300;
  padding: 40px 0;
  position: relative;
  margin: 0;
}

a {
  color: #000;
  text-decoration: none;

  -webkit-transition: color .2s linear;
  -moz-transition: color .2s linear;
  -ms-transition: color .2s linear;
  -o-transition: color .2s linear;
  transition: color .2s linear;
}

a:hover {
  color: #53b5aa;
}

#site-header h1 span {
  color:  #AFBBF2 
;
}

#site-header h1 span.last-span {
  background: #fff;
  padding-right: 150px;
  position: absolute;
  left: 217px;

  -webkit-transition: all .2s linear;
  -moz-transition: all .2s linear;
  -ms-transition: all .2s linear;
  -o-transition: all .2s linear;
  transition: all .2s linear;
}

#site-header h1:hover span.last-span, #site-header h1 span.is-open {
  left: 363px;
}

#site-header h1 em {
  font-size: 16px;
  font-style: normal;
  vertical-align: middle;
}

.container {
  font-family: 'Open Sans', sans-serif;
  margin: 0 auto;
  width: 980px;
}

#cart {
  width: 100%;
}

#cart h1 {
  font-weight: 300;
}

#cart a {
  color: #53b5aa;
  text-decoration: none;

  -webkit-transition: color .2s linear;
  -moz-transition: color .2s linear;
  -ms-transition: color .2s linear;
  -o-transition: color .2s linear;
  transition: color .2s linear;
}

#cart a:hover {
  color: #000;
}

.product.removed {
  margin-left: 980px !important;
  opacity: 0;
}

.product {
  border: 1px solid #eee;
  margin: 20px 0;
  width: 100%;
  height: 195px;
  position: relative;

  -webkit-transition: margin .2s linear, opacity .2s linear;
  -moz-transition: margin .2s linear, opacity .2s linear;
  -ms-transition: margin .2s linear, opacity .2s linear;
  -o-transition: margin .2s linear, opacity .2s linear;
  transition: margin .2s linear, opacity .2s linear;
}

.product img {
  width: 100%;
  height: 100%;
}

.product header, .product .content {
  background-color: #fff;
  border: 1px solid #ccc;
  border-style: none none solid none;
  float: left;
}

.product header {
  background: #000;
  margin: 0 1% 20px 0;
  overflow: hidden;
  padding: 0;
  position: relative;
  width: 24%;
  height: 195px;
}

.product header:hover img {
  opacity: .7;
}

.product header:hover h3 {
  bottom: 73px;
}

.product header h3 {
  background: #53b5aa;
  color: #fff;
  font-size: 22px;
  font-weight: 300;
  line-height: 49px;
  margin: 0;
  padding: 0 30px;
  position: absolute;
  bottom: -50px;
  right: 0;
  left: 0;

  -webkit-transition: bottom .2s linear;
  -moz-transition: bottom .2s linear;
  -ms-transition: bottom .2s linear;
  -o-transition: bottom .2s linear;
  transition: bottom .2s linear;
}

.remove {
  cursor: pointer;
}

.product .content {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  height: 140px;
  padding: 0 20px;
  width: 75%;
}
 .content input{
margin:16px }
.product h1 {
  color: #53b5aa;
  font-size: 25px;
  font-weight: 300;
  margin: 17px 0 20px 0;
}

.product footer.content {
  height: 50px;
  margin: 6px 0 0 0;
  padding: 0;
}

.product footer .price {
  background: #fcfcfc;
  color: #000;
  float: right;
  font-size: 15px;
  font-weight: 300;
  line-height: 49px;
  margin: 0;
  padding: 0 30px;
}

.product footer .full-price {
    background-image:  linear-gradient( 180deg, #B572A1, #AFBBF2 100%);
  color: #fff;
  float: right;
  font-size: 22px;
  font-weight: 300;
  line-height: 49px;
  margin: 0;
  padding: 0 30px;

  -webkit-transition: margin .15s linear;
  -moz-transition: margin .15s linear;
  -ms-transition: margin .15s linear;
  -o-transition: margin .15s linear;
  transition: margin .15s linear;
}


.qt input {
  font-size: 19px;
  line-height: 25px;
  width: 35px;
  text-align: center;
}



.qt-plus:hover, .qt-minus:hover {
  background: #53b5aa;
  color: #fff;
  cursor: pointer;
}

.qt-plus {
  line-height: 50px;
}

.qt-minus {
  line-height: 47px;
}

#site-footer {
  margin: 30px 0 0 0;
}

#site-footer {
  padding: 40px;
}

#site-footer h1 {
  background: #fcfcfc;
  border: 1px solid #ccc;
  border-style: none none solid none;
  font-size: 24px;
  font-weight: 300;
  margin: 0 0 7px 0;
  padding: 14px 40px;
  text-align: center;
}

#site-footer h2 {
  font-size: 24px;
  font-weight: 300;
  margin: 10px 0 0 0;
}

#site-footer h3 {
  font-size: 19px;
  font-weight: 300;
  margin: 15px 0;
}

.left {
  float: left;
}

.right  {
  float: right;

}
.right a{
  display:inline-block;
}

.btn {
  border: 1px solid #999;
  border-radius:2px;
  border-style: none none solid none;
  cursor: pointer;
  display: inline-block;
  color: #fff;
  font-size: 20px;
  font-weight: 300;
  padding: 16px 0;
  width: 200px;
  text-align: center;

  -webkit-transition: all .2s linear;
  -moz-transition: all .2s linear;
  -ms-transition: all .2s linear;
  -o-transition: all .2s linear;
  transition: all .2s linear;
  left:70px
}


.type {
  background: #fcfcfc;
  font-size: 13px;
  padding: 10px 16px;
  left: 100%;
}

.type, .color {
  border: 1px solid #ccc;
  border-style: none none solid none;
  position: absolute;
}

.color {
  width: 40px;
  height: 40px;
  right: -40px;
}

.red {
  background: #cb5a5e;
}

.yellow {
  background: #f1c40f;
}

.blue {
  background: #3598dc;
}

.minused {
  margin: 0 50px 0 0 !important;
}

.added {
  margin: 0 -50px 0 0 !important;
}
.right input[type="submit"]{
    position: relative;
    border-radius: 6px;
    padding: 6px;
    width: 250px;
    height: 50px;
    border: none;
    outline: none;
    cursor: pointer;
    background-image:  linear-gradient( 180deg, #B572A1, #AFBBF2 100%);
}
.content{
    position:relative;
}
</style>

<div class="container">
      <h1>Résumé De votre articles </h1>
    </div>


<form action="" method="POST">
<?php
    global $connect;
    $ip =getIP();
    $total =0;
    $totalprice=0;

    $t_price = "select * from cart where ip_add='$ip'";
    $run_price =mysqli_query($connect, $t_price);
    while($row_t_price = mysqli_fetch_array($run_price)){
      $pro_id_t = $row_t_price['p_id'];
      $price_pro = "select * from products where p_id='$pro_id_t'";
      $run_price_pro =mysqli_query($connect, $price_pro);
      while($row_price_pro = mysqli_fetch_array($run_price_pro)){
        $pro_price = array( $row_price_pro['p_price']);
        $pro_title = $row_price_pro['p_title'];
        $pro_desc = $row_price_pro['p_desc'];
        $pro_img = $row_price_pro['p_img'];
        $pro_price_single = $row_price_pro['p_price'];
        $values = array_sum ($pro_price);
        $total +=$values;
    
         
      
      ?>


  </header>
 <div class="container">
  <section id="cart"> 
      <article class="product">
          <header>
               <a class="remove">
                  <img src="/yabi/images/<?php echo $pro_img;?>" alt="">
               </a>
            </header>

           <div class="content">
                 <h1><div><?php echo $pro_title;?></div></h1>
                 <div><?php echo $pro_desc;?></div>
                 <div style="top: 43px; " class="type small"><input type="checkbox" name='remove[]' value="<?php echo $pro_id_t; ?>" ></div>
            </div>
          <footer class="content">
             <?php  
              
              
             
             ?> 
             <h2 class="full-price"> <?php echo $pro_price_single;?>$   </h2>
           </footer> 
      </article>
    </section>
  <?php
  }} ?>
    <footer id="site-footer">
          <div class="container clearfix">
             <div class="right">
                   <h1 class="total">Total: <span>  <?php echo $total;?></span>$</h1>
                   <a class="btn"><input type="submit"name="update_cart" value="OK" ></a>
                   <a class="btn" href="issam.php"><input type="submit"name="contenue" value="continue"></a>
                  <a class="btn" href="checkout.php"><input type="submit"name="update_c" value="terminer "></a>
              </div>
          </div>
          <?php
         // function update_cart(){
          //  global $connect;
          $ip=getIp();
          if(isset($_POST['update_cart'])){
            foreach($_POST['remove'] as $id_remove){
            $delete_pro ="delete from cart where p_id='$id_remove'AND ip_add='$ip'";
            $run_delete = mysqli_query($connect, $delete_pro);
            if($run_delete){
              header("LOCATION: cartee.php");
            }
            }
          }
          //echo @$up_c=update_cart();

        //}
          ?>
 
    </footer>
   </div>
</form>

<?php
    session_start();

?>
    

  











<?php
include "files/footer.php" ;
?>
