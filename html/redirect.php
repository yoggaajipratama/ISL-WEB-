<?php
   $conn = mysqli_connect("localhost","root","123","tuli");
   $query= mysqli_query($conn,"SELECT * FROM `tuli` WHERE finger >= 0 ORDER BY `timestamp` DESC LIMIT 1");
?>

<!DOCTYPE html>
<html>
   <head>
      <title>Finger Voice</title>
      <meta http-equiv = "refresh" content = "3.5; url = " />
   </head>
   <body class="col-xs-1‘ s/d ‘col-xs-12 bg-info">
      <?php foreach($query as $key){?>
      <?php if($key['text']== "Stop"){?>
         <center>
            <h1>STOP</h1>
            <img src="../file/0.png" style="width: 128px;">
         </center>
      <?php }else if($key['text']!= "Stop"){?>
            <center>
               <h1><?= $key['text']?></h1>
               <img src="../file/<?= $key['image']?>" style="width: 248px;">
            </center>
            <embed name="GoodEnough" src="../audio/<?= $key['audio']?>" loop="false" hidden="true" autostart="true">
         <?php }?>
      <?php }?>
   </body>
</html>