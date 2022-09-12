<?php
include "upload.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Upload Profile Image</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="CSS/avocado.css">
    </head>
    <body>
        <div class="container">
            <div class="upfrm">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    Select Image File to Upload:
                    <input type="file" name="file">
                    <input type="submit" name="submit" value="Upload">
                </form>
            </div>
        </div>
    </body>
</html>