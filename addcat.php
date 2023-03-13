<?php
include "heeder.php";


?>
<?php
$c_name = @$_POST['c_name'];
if(isset($_POST['addcat'])){
    $insert_cat ="insert into category (c_name) values('$c_name')";
    $run_cat = mysqli_query ($db , $insert_cat);
}



?>
<style>
 form input{

position: relative;
border-radius: 5px;
padding: 10px;
width: 300px;
height: 40px;
outline: none;
border:solid 1px #AB5F95;
         }
         .adminBody input[type="submit"]{
    position: relative;
    border-radius: 5px;
    padding: 6px;
    width: 170px;
    height: 40px;
    border: none;
    outline: none;
    cursor: pointer;
    background-image:  linear-gradient( 180deg, #B572A1, #AFBBF2 100%);
    margin:20px;;
    
}

</style>
<div class="adminBody">
    <form action="addcat.php" method="post">
        <label > nom de classement</label>
        <input type="text " name="c_name" >
            <input type="submit" name="addcat" value="Ajouter  "/>

    </form>
</div>