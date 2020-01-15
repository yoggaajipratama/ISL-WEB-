<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/jQuery.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Upload | FV</title>
</head>
<body class="col-xs-1‘ s/d ‘col-xs-12">
    <div class="col-xs-1‘ s/d ‘col-xs-12">
        <div class="text-dark text-center"><h4>Finger voice</h4></div>
        <table class="container table table-striped">
        <div class="container">
        <form action="db/insert.php" method="post" enctype="multipart/form-data">
            <tr>
                <th><label for="text">Text</label></th>
                <td><textarea class="form" rows="3" id="text" name="text"></textarea></td>
            </tr>
            <tr>
                <th><label for="rec">Audio</label></th>
                <td>
                    <input type="file" accept="audio/*" name="rec">
                </td>
            </tr>
            <tr>
                <th><label for="img">Gambar</label></th>
                <td>
                    <input type="file" accept="image/*" name="img">
                </td>
            </tr>
            <tr>
                <td><button type="submit" class="btn btn-danger">Simpan</button></td>
            </tr>
        </form>
        </div>
        </table>
    </div>
</body>
</html>