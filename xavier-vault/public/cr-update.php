<?php 


if (isset($_GET['id'])) {
	include "connection.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	  $sql = "SELECT * FROM heros_table WHERE id=$id";
    $result = mysqli_query($con, $sql);

  if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
  }else {
    	header("Location: read.php");
    }


}else if(isset( $_POST['update'])){
    include "../public/connection.php";
    function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

  $name = validate($_POST['name']);
  $realname = validate($_POST['realname']);
  $shortbio = validate($_POST['shortbio']);
  $longbio = validate($_POST['message']);
	$id = validate($_POST['id']);

  if (empty($name)) {
    header("Location: ../public/update.php?id=$id&error=Heroes Name is required");
  } else if (empty($realname)) {
    header("Location: ../public/update.php?id=$id&error=Heroes Real Name is required");
  }else if (empty($shortbio)) {
    header("Location: ../public/update.php?id=$id&error=Heroes Short Bio is required");
  }else if (empty($longbio)) {
    header("Location: ../public/update.php?id=$id&error=Heroes Long Bio is required");
  }
  else {

       $sql = "UPDATE heros_table
               SET name='$name',             realname='$realname', shortbio = '$shortbio', longbio='$longbio'
               WHERE id=$id ";
       $result = mysqli_query($con, $sql);
       if ($result) {
       	  header("Location: ../public/read.php?success=successfully updated");
       }else {
          header("Location: ../public/update.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}else {
    header("Location: read.php");
}

?>