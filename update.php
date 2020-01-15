<?php 
    include 'db/connection.php'; 
    $query = mysqli_query($conn, "SELECT * FROM `tuli` WHERE text != 'Stop'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Update |FV</title>
</head>
<body class="col-xs-1‘ s/d ‘col-xs-7">
    <div class="col-xs-1‘ s/d ‘col-xs-7">
        <div class="text-dark text-center"><h4>Finger voice</h4></div>
        <table class="container container-fluid table table-striped">
            <div class="container">
            <thead>
                <tr>
                    <th>Text</th>
                    <th>Finger</th>
                </tr>
            </thead>
        
            <tbody>
            <?php while ($list = mysqli_fetch_array($query)) {?>
                <tr>
                    <form action="db/db_update.php" method="post">
                    <input type="hidden" name="id" value="<?= $list['id']?>">
                    <td><input type="text" name="text" value="<?= $list['text']?>"></td>
                    <td><input type="number" name="finger" value="<?= $list['finger']?>"></td>
                    <td><button type="submit" class="btn btn-danger">Update</button></td>
                    </form>
                </tr>
            <?php } ?>
            </tbody>
        </div>
        </table>
    </div>
</body>
</html>