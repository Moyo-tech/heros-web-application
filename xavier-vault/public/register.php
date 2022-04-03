<?php

session_start();
include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
  //somthing was posted 
  $user_name = $_POST['user_name'];
  $password = $_POST['password'];

  if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
  {

    //if all of that is correct save to database
    $user_id = random_num(20);
    $query = "insert into users_table (user_id,user_name,password) values ('$user_id','$user_name', '$password')";

    mysqli_query($con, $query);

    header("Location: login.php");
    die;
  }else{
    echo "Please enter some valid information!";
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./src/style.css?<?php echo time(); ?>" type="text/css">
    <title>Register Page </title>
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
                    <span class="v72_322">Have an Account ?<span><a href="login.php" style="text-decoration: none;">Login</a> </span></span>
                </div>
                <!-- CREATING THE FORM -->



                <div class="name"></div>
                <div class="v72_34">
                    <div class="name"></div><span class="v72_36">Forgot Password</span></div>

                <form method="post">
                    <div class="first-form"> <label for="name">Enter your Username</label>
                        <br>
                        <input type="text" placeholder="Enter your Username" name="user_name">
                    </div>
                    <br>

                    <div class="first-form">
                        <label for="password">Create a Password</label>
                        <br>
                        <input type="password" placeholder="Enter your Password" name="password">
                    </div>
                    

                    <div class="v73_79">
                    <div class="v73_80"></div>
                    <span> 
                        <input type="submit" value="Signup" class="v73_811">
                    </span>
                </div>

                </form>
            </div>
        </div>
        <span class="v72_477"> Sign Up</span>
        <div class="name"></div>
        <div class="name"></div><span class="v72_64">XAVIERS VAULT</span></div>
</body>

</html>