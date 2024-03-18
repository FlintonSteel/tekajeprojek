<?php
  include ('partials/header.php');
  include ('edit.php');
  require_once('db.php');
  $upload_dir = 'uploads/';
?>
<!DOCTYPE html>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                Edit Profile
              </div>
              <div class="card-body">
                <form class="" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" name="nama"  placeholder="Masukan Nama" value="<?php echo $row['nama']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="absen">Absen:</label>
                      <input type="text" class="form-control" name="absen" placeholder="Masukan Nomor Absen" value="<?php echo $row['absen']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="Kelas">Kelas</label>
                      <input type="text" class="form-control" name="kelas" placeholder="Masukan Kelas" value="<?php echo $row['kelas']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="image">Choose Image</label>
                      <div class="col-md-4">
                        <img src="<?php echo $upload_dir.$row['image'] ?>" width="100">
                        <input type="file" class="form-control" name="image" value="">
                      </div>
                    </div>
                    <div class="form-group">
                      <button type="submit" name="Submit" class="btn btn-primary waves">Submit</button>
                      <a class="btn btn-outline-danger" href="index.php"><i class="fa fa-sign-out-alt"></i><span>Back</span></a>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  </body>
  <?php
    include ('partials/footer.php');
  ?>
</html>
