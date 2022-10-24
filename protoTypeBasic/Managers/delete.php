<?php

include "PromotionMnager.php";

$PromoBLL = new PromotionMnager;

if(isset($_GET["id"])){
   $id = $_GET["id"];
    $PromoBLL->deletePromotion($id);
    header("Location:index.php");
}



?>