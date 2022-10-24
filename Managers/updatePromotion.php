<?php

require_once "PromotionMnager.php";

$prmotionManger= new PromotionMnager() ;
$promo= new PromotionMnager ;


if (isset($_GET['id'])){
    $id = $_GET['id'];
    $promotion = $prmotionManger->getPromotionById($_GET['id']);
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];

    $promotionBAL->updatePromotion($id,$name);

   header("Location:index1.php");
}

 
?>


<form method="POST">

<input type="hidden" value=<?php echo  $promotion->getId()?>  name="id" >                                                             
Name: <input type="text" value=<?php echo  $promotion->getName()?> name="name" >
<button >Update</button>
</form>