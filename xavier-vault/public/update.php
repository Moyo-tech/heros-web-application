<?php

include '../public/cr-update.php'

?>



<!DOCTYPE html>
<html>

<head>
  <title>Update</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="./src/crud.css">
</head>

<body>
  <div class="button" style="padding-left:20px">
    <a href="index.php"><button class="btn btn-primary" name="create">Logout</button></a>
  </div>

  <div class="container">

    <form action="./cr-update.php" method="post">

      <h4 class="display-4 text-center">Update</h4>
      <hr><br>

      <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $_GET['error']; ?>

        </div>
      <?php } ?>

      <div class="form-group">
        <label for="name">Name</label>
        <input type="name" class="form-control" id="name" name="name" value="<?= $row['name'] ?>">
      </div>

      <div class="form-group">
        <label for="realname">Heros Real Name</label>
        <input type="name" class="form-control" id="realname" name="realname" value="<?= $row['realname'] ?>">
      </div>


      <div class="form-group">
        <label for="shortbio">Short Bio</label>
        <input type="text" class="form-control" id="shortbio" name="shortbio" value="<?= $row['shortbio'] ?>">
      </div>


      <div class="form-group">
        <label for="longbio">Long Bio</label>
        <textarea class="form-control" name="message" id="message" value="<?= $row['longbio'] ?> " cols="30" rows="10">
        </textarea>
      </div>

      <input type="text" name="id" value="<?= $row['id'] ?>" hidden>

      <button type="submit" class="btn btn-primary" name="update">Update</button>

      <a href="read.php" class="link-primary">View</a>
    </form>
  </div>
</body>

</html>