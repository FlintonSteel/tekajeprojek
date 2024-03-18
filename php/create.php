<?php
  include('add.php');
  include('partials/header.php');
?>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">Create</div>
              <div class="card-body">
                <form class="" action="add.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" name="nama"  placeholder="Masukan Nama" required>
                    </div>
                    <div class="form-group">
                      <label for="absen">No Absen:</label>
                      <input type="text" class="form-control" name="absen" placeholder="Masukan "  required>
                    </div>
                    <div class="form-group">
                      <label for="kelas">Kelas</label>
                      <input type="text" class="form-control" name="kelas" placeholder="Masukan " required>
                    </div>
                    <div class="form-group">
                      <label for="image">Choose Image</label>
                      <input type="file" class="form-control" name="image" accept=".jpeg, .jpg, .png, .gif" required>
                    </div>
                    <div class="form-group">
                      <button type="submit" name="Submit" class="btn btn-primary waves">Submit</button>
                    </div>
                </form>
                
              </div>
            </div>
          </div>
        </div>
      </div>
  </body>
  <?php
  include('partials/footer.php');
  ?>
</html>
