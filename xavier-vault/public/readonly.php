<?php

include "connection.php";

$sql = "SELECT * FROM heros_table ORDER BY id DESC";
$result = mysqli_query($con, $sql);

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

  <div class="container">
    <div class="box">
      <h4 class="display-4 text-center">READ</h4><br>


      <?php if (isset($_GET['success'])) { ?>
        <div class="alert alert-success" role="alert">
          <?php echo $_GET['success']; ?>
        </div>
      <?php } ?>


      <?php if (mysqli_num_rows($result)) { ?>

        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Heros Real Name</th>
              <th scope="col">Heros Short Bio</th>
              <th scope="col">Heros Long Bio</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>

            <?php
            $i  = 0;
            while ($rows = mysqli_fetch_assoc($result)) {
              $i++;
            ?>

              <tr>
                <th scope="row"><?= $i ?></th>
                <td><?= $rows['name'] ?></td>
                <td><?php echo $rows['realname']; ?></td>
                <td><?php echo $rows['shortbio']; ?></td>
                <td><?php echo $rows['longbio']; ?></td>
                <td>
                  <a href="login.php" class="btn btn-success">Update</a>
                </td>
                <td>
                  <a href="login.php" class="btn btn-danger">Delete</a>

                </td>
              </tr>

            <?php } ?>


          </tbody>
        </table>

      <?php } ?>
      <div class="link-right">
        <a href="login.php" class="linkprimary">Create</a>
      </div>

    </div>
  </div>

</body>

</html>