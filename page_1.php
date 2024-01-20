<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="./style.css">
</head>
<?php include_once 'createdb.php'; ?>

<body>
    <nav>
        <ul> <?php include 'navbar.php'; ?></ul>
    </nav>

    <div class='container'>
        <div class='paper'>
            <form action="submitForm.php" method="post">
                Nama    <input type="text" name="nama"/><br/>
                Umur    <input type="text" name="umur"/><br/>
                Gender  <input type="text" name="gender"/><br/>
                <input name="submit1" type="submit" value="submit"/>   
            </form>
        </div>
    </div>
</body>

</html>