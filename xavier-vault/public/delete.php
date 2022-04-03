<?php

if (isset($_GET['id'])) {
  include "connection.php";
  function validate($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $id = validate($_GET['id']);

  $sql = "DELETE FROM heros_table
	        WHERE id=$id";
  $result = mysqli_query($con, $sql);
  if ($result) {
    header("Location: ../public/read.php?success=successfully deleted");
  } else {
    header("Location: ../public/read.php?error=unknown error occurred&$user_data");
  }
} else {
  header("Location: ../public/read.php");
}
