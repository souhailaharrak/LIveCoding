<?php

include "PromotionMnager.php";
$PromoManager = new  PromotionMnager();
$GetData =  $PromoManager->getAllPromotions();

?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php 
        foreach($GetData as $value){
          
            ?>
       <td> <?php echo $value->GetId() ?></td>
      <td> <?php echo $value->getName() ?></td>
      <td>
        <a href="Delete.php?id=<?php echo $value->getId() ?>">Delete</a>
        <a href="updatePromotion.php?id=<?php echo $value->getId() ?>">Edit</a>
      </td>
     
     
    </tr>
<?php }?>
  </tbody>
</table>

<a href="index.php">ajouter</a>