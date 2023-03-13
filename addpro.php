<?php include "heeder.php";?>
<?php
//post value
$p_title =@$_POST['p_title'];
$p_cayegory =@$_POST['p_cayegory'];
$p_img =@$_FILES['p_img']['name'];
$p_img_tmp =@$_FILES['p_img']['tmp_name'];
$p_imgf =@$_FILES['p_imgf']['name'];
$p_imgf_tmp =@$_FILES['p_imgf']['tmp_name'];
$p_imgc =@$_FILES['p_imgc']['name'];
$p_imgc_tmp =@$_FILES['p_imgc']['tmp_name'];
$p_imgd =@$_FILES['p_imgd']['name'];
$p_imgd_tmp =@$_FILES['p_imgd']['tmp_name'];
$p_imge =@$_FILES['p_imge']['name'];
$p_imge_tmp =@$_FILES['p_imge']['tmp_name'];
$p_price =@$_POST['p_price'];
$p_desc =@$_POST['p_desc'];
$p_key_word =@$_POST['p_key_word'];

//move uplude img
move_uploaded_file($p_img_tmp,'images/$p_img');
move_uploaded_file($p_imgc_tmp,'images/$p_imgc');
move_uploaded_file($p_imgd_tmp,'images/$p_imgd');
move_uploaded_file($p_imge_tmp,'images/$p_imge');
move_uploaded_file($p_imgf_tmp,'images/$p_imgf');

//insert pro
 if (isset($_POST['addpro'])){
     if(empty($p_title) || empty($p_cayegory) || empty($p_img) || empty($p_price) ||empty($p_desc) || empty($p_key_word)){
  echo '<script> alert ("Veuillez remplir toutes les données");</script>';
 }
 
 else{
     $insert_pro ="insert into products (p_title,p_cayegory,p_img,p_price,p_desc,p_key_word,p_imgc,p_imgd,p_imge,p_imgf) values
                            ('$p_title','$p_cayegory','$p_img','$p_price','$p_desc','$p_key_word','$p_imgc','$p_imgd','$p_imgd','$p_imgf' )";
        $run_pro = mysqli_query($db, $insert_pro);
        if(isset ($run_pro)){

        }
 }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scal e=1.0">
    <title>Ajouter un produit</title>
    </head>

    
    <style>
.adminBody {
    background:   #A293E6;
  border-radius: 20px;
  box-sizing: border-box;
  height: 900px;
  padding: 20px;
  width: 520px;
  margin-left:420px;
  margin-top:50px;
}

.title {
  color: #eee;
  font-family: sans-serif;
  font-size: 36px;
  font-weight: 600;
  margin-top: 30px;
  border-bottom:solid 2px;
  border-color:#B572A1;
  width:300px
}

.subtitle {
  color: #eee;
  font-family: sans-serif;
  font-size: 16px;
  font-weight: 600;
  margin-top: 10px;
}

.input-container {
  height: 50px;
  position: relative;
  width: 100%;
}

.ic1 {
  margin-top: 40px;
}

.ic2 {
  margin-top: 30px;
}

.input {
  background-color: #E6B5F7;
  border-radius: 12px;
  border: 0;
  box-sizing: border-box;
  color: 000;
  font-size: 18px;
  height: 100%;
  outline: 0;
  padding: 4px 20px 0;
  width: 100%;
}

.cut {
  background-color: #A293E6;
  border-radius: 10px;
  height: 20px;
  left: 20px;
  position: absolute;
  top: -20px;
  transform: translateY(0);
  transition: transform 200ms;
  width: 150px;
}

.cut-short {
  width: 50px;
}

.input:focus ~ .cut,
.input:not(:placeholder-shown) ~ .cut {
  transform: translateY(8px);
}

.placeholder {
  color: #65657b;
  font-family: sans-serif;
  left: 20px;
  line-height: 14px;
  pointer-events: none;
  position: absolute;
  transform-origin: 0 50%;
  transition: transform 200ms, color 200ms;
  top: 20px;
}

.input:focus ~ .placeholder,
.input:not(:placeholder-shown) ~ .placeholder {
  transform: translateY(-30px) translateX(10px) scale(0.75);
}

.input:not(:placeholder-shown) ~ .placeholder {
  color: #808097;
}

.input:focus ~ .placeholder {
  color: #dc2f55;
}

.submit {
    background-color: #523a78;
background-image: linear-gradient(316deg, #523a78 0%, #ee696b 74%);  border: 0;
  box-sizing: border-box;
  color: #eee;
  cursor: pointer;
  font-size: 18px;
  height: 50px;
  margin-top: 38px;
  // outline: 0;
  text-align: center;
  width: 150px;
  border-radius: 12px;
left:150px;
}

.submit:active {
  background-color: #06b;
}
.fichierr{
    margin-top:20px;
    color:#63636F;
}
.fichierr input{
    margin:10px;
height:50px;
}
.classa{
    margin-top:20px;
    color:#63636F;

}

    </style>

<div class="adminBody">
    <form action="addpro.php" method="post" enctype="multipart/form-data">
      <div class="title">Welcome admin</div>



      <div class="input-container ic1">
        <input id="firstname" class="input" name ="p_title" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="firstname" class="placeholder">Product name</label>
      </div>

       

      <div class="input-container ic2">
        <input id="lastname" class="input"  name="p_price" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="lastname" class="placeholder">prix de produit</label>
      </div>
           


      <div class="input-container ic2">
        <input id="email" class="input" name="p_desc"  type="text" placeholder=" " />
        <div class="cut cut-short"></div>
        <label for="email" class="placeholder">Description</label>
      </div>
      <div class="input-container ic2">
        <input id="email" class="input" name="p_key_word"  type="text" placeholder=" " />
        <div class="cut cut-short"></div>
        <label for="email" class="placeholder">keyword</label>
      </div>


      <div class="fichierr">
      <label> image d'un produit </label>
        <input type="file" name="p_img"  placeholder="tapez le nom de votre produit ">
        <br/>
        <label> image d'un produit détailler1 </label>
        <input type="file" name="p_imgc"  placeholder="tapez le nom de votre produit ">
                 <br/>
                 <label> image d'un produit détailler2</label>
        <input type="file" name="p_imgd"  placeholder="tapez le nom de votre produit ">
                 <br/>
                 <label> image d'un produit détailler3 </label>
        <input type="file" name="p_imge"  placeholder="tapez le nom de votre produit ">
                 <br/>
                 <label> image d'un produit détailler4</label>
        <input type="file" name="p_imgf"  placeholder="tapez le nom de votre produit ">
                 <br/>
                </div>


      <label class="classa"> classement du produit </label>
    <select name="p_cayegory"  >
    <?php
          $get_c ="select * from category";
          $run_c = mysqli_query($db,$get_c);
          while ($row_c= mysqli_fetch_array($run_c)){
              echo '<option value="'.$row_c['c_id'] . '">'.$row_c['c_name'].'</option>';
          } ?>      
          </select><br/>



      <button type="text"  name="addpro" class="submit">ajouter</button>
      </form>
    </div>



