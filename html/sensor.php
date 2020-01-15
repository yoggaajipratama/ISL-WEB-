<?php
    $id = $_GET[id];
    $conn = mysqli_connect("localhost","root","123","tuli");
    $timestamp = date('YY-MM-DD hh:mm:ss');
    if($id==2){        
        $query= mysqli_query($conn,"UPDATE `tuli` SET `timestamp` = CURRENT_TIME() WHERE `finger` = '2'");
    }elseif($id==0){
        $query2= mysqli_query($conn,"UPDATE `tuli` SET `timestamp` = CURRENT_TIME() WHERE `text` = 'Stop'");
    }elseif($id==NULL) {
        $query3= mysqli_query($conn,"UPDATE `tuli` SET `timestamp` = CURRENT_TIME() WHERE `text` = 'Stop'");
    }
    
?>