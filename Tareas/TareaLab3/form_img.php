<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="create_img.php" method="post" enctype="multipart/form-data">
    <div>
            <img src="images/<?php echo $row['fotografia'] ?>" alt="">
        </div>
        <div>
            <label for="fotografia">Fotografia</label>
            <input type="file" name="fotografia">
        </div>
        <input type="submit" value="Crear">
    </form>
</body>
</html>