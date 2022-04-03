<?php

session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //somthing was posted 
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

        //read from database
        $query = "select * from users_table where user_name = '$user_name' limit 1";

        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                if ($user_data['password'] === $password) 
                {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: access.php");
                    die;
                }
            }
        }
        echo "<p align = 'right' size='4pt> Wrong Username or Password</p>";

    } else
    {
        echo "<p align = 'right'> Wrong Username or Password</p>";
    }
}

?>

<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta hVttp-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./src/style.css?<?php echo time(); ?>" type="text/css">
    <title>Login Page</title>
</head>

<body>
    <div class="v72_24">
        <div class="img1">
            <div class="img1-main"></div>
        </div>
        <div class="img-2">
            <div class="img2-main"></div>
        </div>

        <div class="v72_25"></div>
        <div class="name"></div>
        <div class="v72_27">
            <div class="v72_28">
                <div class="v72_29"></div>
                <div class="v72_30">
                    <span class="v72_31">Welcome to Xaviers Vault</span>
                    <span class="v72_32">No Account ?
                        <a href="register.php" style="text-decoration: none;">Register</a> </span>
                </div>
                <!-- CREATING THE FORM -->



                <div class="name"></div>
                <div class="v72_34">
                    <div class="name"></div><span class="v72_36">Forgot Password</span>
                </div>


                <form method="post">
                    <div class="first-form"> <label for="name">Enter your Username</label>
                        <br>
                        <input type="text" placeholder="Enter your Username" name="user_name">
                    </div>
                    <br>
                    <div class="first-form">
                        <label for="password">Enter Your Password</label>
                        <br>
                        <input type="password" placeholder="Enter your Password" name="password">
                    </div>

                    <div class="v73_79">
                        <div class="v73_80"></div>
                        <span>
                            <input type="submit" value="Login" class="v73_81">
                        </span>
                    </div>

                </form>
            </div>
        </div>
        <span class="v72_47">Login </span>
        <div class="name"></div>
        <div class="name"></div><span class="v72_64">XAVIERS VAULT</span>
    </div>
</body>

</html>