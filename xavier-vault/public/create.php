<?php

if (isset($_POST['create'])) {

  include "connection.php";

  function validate($data)
  {
    $data = trim($data);
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $name = validate($_POST['name']);
  $realname = validate($_POST['realname']);
  $shortbio = validate($_POST['shortbio']);
  $longbio = validate($_POST['message']);

  if (empty($name)) {
    header("Location: ../public/create.php?error=Heros Name is required&$user_data");
  } else if (empty($realname)) {
    header("Location: ../public/create.php?error=Heros Real Name is required&$user_data");
  } else if (empty($shortbio)) {
    header("Location: ../public/create.php?error=Heros Short Bio is required&$user_data");
  } else if (empty($longbio)) {
    header("Location: ../public/create.php?error=Heros Long Bio is required&$user_data");
  } else {
    $sql = "INSERT INTO heros_table(name, realname, shortbio, longbio) VALUES('$name', '$realname', '$shortbio', '$longbio')";

    $result = mysqli_query($con, $sql);

    if ($result) {
      header("Location: ../public/read.php?success=successfully created");
    } else {
      header("Location: ../public/create.php?error=unknown error occurred&$user_data");
    }
  }
  // $user_data = 'name='.$name. '&realname=' .$realname. '&shortbio= '.$shortbio. '&longbio=' .$longbio; 


}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="./src/crud.css?<?php echo time(); ?>" type="text/css">

</head>

<body>

  <div class="button" style="padding-left:20px">
    <a href="index.php"><button class="btn btn-primary" name="create">Logout</button></a>
  </div>

  <div class="container">
    <form method="post">
      <h4 class="display-4 text-center">CREATE</h4>
      <hr><br>

      <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $_GET['error']; ?>
        </div>
      <?php } ?>


      <div class="form-group">
        <label for="name">Heros Name</label>
        <input type="name" class="form-control" id="name" name="name" value="<?php if (isset($_GET['name']))
                                                                                echo ($_GET['name']); ?>" placeholder="Enter Heroes Name">
      </div>

      <div class="form-group">
        <label for="realname">Heros Real Name</label>
        <input type="name" class="form-control" id="realname" name="realname" value="<?php if (isset($_GET['realname']))
                                                                                        echo ($_GET['realname']); ?>" placeholder="Enter Heroes Real Name">
      </div>


      <div class="form-group">
        <label for="shortbio">Short Bio</label>
        <input type="text" class="form-control" id="shortbio" name="shortbio" value="<?php if (isset($_GET['shortbio']))
                                                                                        echo ($_GET['shortbio']); ?>" placeholder="Enter a Short Bio about the Hero">
      </div>

      <div class="form-group">
        <label for="longbio">Long Bio</label>

        <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Enter a Long Bio about the Hero" value="<?php if (isset($_GET['message']))
                                                                                                                                              echo ($_GET['message']); ?>">
        </textarea>
      </div>


      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>

      <div class="button">
        <button type="submit" class="btn-btn-primary" name="create">Create</button>
      </div>
      <a href="read.php" class="link-primary">View Heroes</a>

    </form>

  </div>

</body>

</html>