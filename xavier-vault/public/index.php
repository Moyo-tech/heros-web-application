<?php
session_start();

include("connection.php");
include("functions.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Cooper+Black&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./src/style.css?<?php echo time(); ?>" type="text/css">
    <title>Document</title>
</head>

<body>
    <div class="v1_4">
        <div class="v1_22"></div>
        <div class="v3_26"></div>
        <div class="v3_31"></div>
        <div class="v3_33"></div>
        <div class="v3_36"></div>
        <div class="v3_34"></div>
        <div class="v3_35"></div>
        <span class="v1_23">WELCOME TO</span>
        <span class="v1_24">XAVIER’S VAULT</span>

        <div class="v73_82">
            <div class="v73_83">
                <div class="v73_84"></div>
                <div class="v73_85"></div>
            </div>
            <span><a href="readonly.php" class="v73_90">VIEW THE HEROS</a></span>
        </div>

        <div class="v73_8">
            <div class="v73_3">
                <div class="v73_4"></div>
                <div class="v73_5"></div>
            </div>

            <span><a href="login.php" class="v73_0">CREATE. UPDATE. DELETE. HEROS</a></span>
        </div>


    </div>
</body>

</html>