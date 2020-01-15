<title>Tambahkan</title>
<script src="../js/jQuery.js"></script>
<script src="../js/sweetalert.min.js"></script>
<?php
    include 'connection.php';
    $id = $_POST['id'];
    $text =  $_POST['text'];
    $finger =  $_POST['finger'];

    if ($finger == NULL) {
        $sql = mysqli_query($conn, "UPDATE tuli SET finger = NULL WHERE id = '$id'");
        mysqli_query($conn, "UPDATE tuli SET timestamp = CURRENT_TIME() WHERE text = 'Stop'");
        echo "<script>$(document).ready(function () {
            swal('Saved!', 'Terima kasih', 'success');})</script>";
        echo "<script>setTimeout(function () { window.location.href = '../update.php'; }, 2000)</script>";
    }else{
        $sql = mysqli_query($conn, "UPDATE tuli SET finger = '$finger' WHERE id = '$id'");
        mysqli_query($conn, "UPDATE tuli SET timestamp = CURRENT_TIME() WHERE text = 'Stop'");
        echo "<script>$(document).ready(function () {
            swal('Saved!', 'Terima kasih', 'success');})</script>";
        echo "<script>setTimeout(function () { window.location.href = '../update.php'; }, 2000)</script>";
    }
?>