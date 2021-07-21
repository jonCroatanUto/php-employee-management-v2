<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css">
    <title>Document</title>
</head>
<body>
    <?php require 'views/header.php';?>
    <main id="main">
        <h1 class="center error"><?php echo $this->errorMessage;?></h1>
    </main>

    <?php require 'views/footer.php';?>
</body>
</html>