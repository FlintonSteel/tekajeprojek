<?php
  require_once('db.php');
  $upload_dir = 'uploads/';

  if(isset($_GET['id'])){
		$id = $_GET['id'];
		$sql = "select * from contacts where id = ".$id;
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			$image = $row['image'];
			unlink($upload_dir.$image);
			$sql = "delete from contacts where id=".$id;
			if(mysqli_query($conn, $sql)){
				header('location:index.php');
			}
		}
	}
?>