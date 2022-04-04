<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>
      <ul>
        <!-- <?php foreach ($names as $name):?>
         <li><?= $name;?></li>
<?php endforeach; ?> -->
<?php foreach ($person as $key =>$val):?>
  <li><strong><?=$key?></strong>
    <?=$val;?></li>
<?php endforeach ?>


      </ul>
    </h1>
  </body>
</html>
