<?php

require_once 'conixion.php';
require_once '../entity/promotion.php';

class PromotionMnager extends Conexion{

 public function PromotionMnager($promotion){


     $name=$promotion->getName();
  $insert ="INSERT INTO promotion  (name) VALUES ('$name')";
   
  //execute query

  mysqli_query($this->connect(),$insert);
 }
              
 public function getAllPromotions(){
    $sqlGetData = 'SELECT * FROM promotion';
    $result = mysqli_query($this->Connect(), $sqlGetData);
    $promotionsList = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $promotions = array();

    foreach($promotionsList as $promotionList){
        $promotion = new Premotion(); 
        $promotion->setId($promotionList['id']);
        $promotion->setName($promotionList['name']);

        array_push($promotions, $promotion);  
    }
    return $promotions;
}

public function getPromotionById($id){
    $sqlGetData = "SELECT * FROM promotion WHERE id = $id";
    $result = mysqli_query($this->Connect(), $sqlGetData);
    $promotionList = mysqli_fetch_assoc($result);

    $promotion = new Premotion();
    $promotion->setId($promotionList['id']);
    $promotion->setName($promotionList['name']);

    return $promotion;
}

public function updatePromotion($id,$name){
    // Sql query
    $updateRow="UPDATE promotion SET `name`='$name' WHERE id = $id";
                      
 
    // Execute query
    mysqli_query($this->Connect(), $updateRow);
}

public function deletePromotion($id){
    // Sql query
    $deleteRow="DELETE FROM promotion WHERE id = $id";
                      
    // Execute query
    mysqli_query($this->Connect(), $deleteRow);
}                                                                          
        
   

}





?>