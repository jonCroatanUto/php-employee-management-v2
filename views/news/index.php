<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require 'views/header.php';?>

    <main id="main">
        <h1 class="center"> Welcome to new section</h1>

        <form action="<?php echo constant('URL'); ?>news/insertNewStudent" method="post">
            <p>
                <label for="enrolment">Enrolment</label><br>
                <input type="text" name="enrolment" id="">
            </p>
            <p>
                <label for="name">Name</label><br>
                <input type="text" name="name" id="">
            </p>
            <p>
                <label for="lastname">Last Name</label><br>
                <input type="text" name="lastname" id="">
            </p>
            <p>
                <input type="submit" value="Submit" id="">
            </p>
        </form>
    </main>

    <?php require 'views/footer.php';?>
</body>
</html>