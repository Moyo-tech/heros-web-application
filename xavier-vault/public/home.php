<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Cooper+Black&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./src/style.css?<?php echo time(); ?>" type="text/css">
    <title>HOME-PAGE</title>

</head>

<body>
    <div class="v104_117">

        <div class="v104_118"></div>
        <div class="v104_142"></div>
        <a href="read.php" class="v104_143">VIEW THE HEROS</a>
        <a href="create.php" class="v104_144">CREATE A HERO</a>
        <span class="v104_145">XAVIER</span>
        <a href="update.php" class="v104_146">UPDATE A HERO</a>
        <a href="delete.php" class="v104_147">DELETE A HERO</a>
        <span class="v104_148">PROFESSOR</span>
        <span class="v104_149">XAVIER</span><span class="v104_150">The midnight hour is close at hand
            Creatures crawl in search of blood
            To terrorize y'alls neighborhood.
            Professor Xavier and his heroes
            keep the darkness away
        </span>

        <!-- FRAME -->

        <div class="v104_166"></div>



        <div class="v104_152"></div>
        <a href="" style="text-decoration: none;" class="v104_154">READ HEREOS</a>

        <a href="" style="text-decoration: none;" class="">READ HEREOS</a>

        <a href="" style="text-decoration: none;" class="">READ HEREOS</a>

        <a href="" style="text-decoration: none;" class="">READ HEREOS</a>


    </div>
</body>

</html>