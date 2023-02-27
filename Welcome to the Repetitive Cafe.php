<h1>Welcome to the Repetitive Cafe</h1>
<?php
$drinks = ["Beer"=>5,"Brandy"=>10,"Batida"=>7,"Gibson"=>7,"Ouzo"=>10,"Mojito"=>7,"Coffee"=>2,"Tea"=>2];
$pastries = ["Baklava", "Bear claw", "Pączek", "Croissant", "Macaron", "Pain au chocolat", "Strudel"];
?>

<h3>Drinks!</h3>
<ul>
  <?php
    foreach($drinks as $drink => $price):
  ?>
  <li><?=$drink?> for $<?=$price?></li>
  <!--<li><?="$drink: $$price"?></li>-->
  <?php
    endforeach;
  ?>
</ul>
<h3>Pastries! ($2 each)</h3>
<ul>
  <?php
  for($i=1;$i<count($pastries);$i++):
  ?>
  <li><?=$pastries[$i]?></li>
  <?php
  endfor;
  ?>
</ul>
