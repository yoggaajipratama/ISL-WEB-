<title>Tambahkan</title>
<script src="../js/jQuery.js"></script>
<script src="../js/sweetalert.min.js"></script>
<?php
    $t = $_POST['text'];
    $r = $_FILES['rec']['name'];
    $i = $_FILES['img']['name'];
    $file_tmp = $_FILES['img']['tmp_name'];
    $file_tmp3 = $_FILES['rec']['tmp_name'];


    $explode = explode('.',$i);
    $explodemp3 = explode('.',$r);

    $extens = strtolower(end($explode));
    $extensmp3 = strtolower(end($explodemp3));
    
    $img = $t.'.'.$extens;
    $rec = $t.'.'.$extensmp3;

    

    if($t != NULL && $rec != NULL && $img != NULL){
        $conn = mysqli_connect("localhost","root","123","tuli");
        if($save = mysqli_query($conn, "INSERT INTO `tuli` (`id`, `text`, `image`, `audio`, `finger`, `timestamp`) VALUES (NULL, '$t', '$img', '$rec', NULL, CURRENT_TIMESTAMP)")){
            $move = move_uploaded_file($file_tmp, '../file/'.$img);
            $movemp3 = move_uploaded_file($file_tmp3, '../audio/'.$rec);
            $command = escapeshellcmd("python image2RLE.py -i '".$img."'");
            echo shell_exec($command);

            // echo "<script>$(document).ready(function () {
            //     swal('Saved!', 'Terima kasih', 'success');})</script>";
            // echo "<script>setTimeout(function () { window.location.href = '../index.php'; }, 2000)</script>";
        }else{
            echo "<script>alert('Data gagal tersimpan!')</script>";
        }
     }else{
        echo "<script>alert('Data belum terisi!')</script>";
        echo "<script>window.location.href='../index.php'</script>";
    }
?>