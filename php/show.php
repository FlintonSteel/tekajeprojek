<?php
  require_once('db.php');
  include ('partials/header.php');
  include ('partials/body.php');
  $upload_dir = 'uploads/';

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from contacts where id=".$id;
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    }else {
      $errorMsg = 'Could not Find Any Record';
    }
  }
?>

<!DOCTYPE html>
<html>
  <body>
      <div class="container">
        <div class="row justify-content-center">
          <div class="card">
            <div class="card-header">
              Contact Details
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md">
                    <img src="<?php echo $upload_dir.$row['image'] ?>" height="200">
                </div>
                <div class="col-md">
                    <h5 class="form-control"><i class="fa fa-user-tag">
                      <span><?php echo $row['nama'] ?></span>
                    </i></h5>
                    <h5 class="form-control"><i class="fa fa-mobile-alt">
                      <span><?php echo $row['absen'] ?></span>
                    </i></h5>
                    <h5 class="form-control"><i class="fa fa-envelope">
                      <span><?php echo $row['kelas'] ?></span>
                    </i></h5>
                      <a class="btn btn-outline-danger" href="index.php"><i class="fa fa-sign-out-alt"></i><span>Back</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>
  </html>
  <?php
include 'partials/footer.php';
?>
