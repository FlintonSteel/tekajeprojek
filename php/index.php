<?php
  include ('db.php');
  $upload_dir = 'uploads/';
  include ('partials/header.php');
  include ('partials/body.php');
?>
<!DOCTYPE html>
<html>
  <body>
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                      <div class="card-body">
                      <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Photo</th>
                                <th>Nama</th>
                                <th>No Absen:</th>
                                <th>Kelas</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            $sql = "select * from contacts";
                            $result = mysqli_query($conn, $sql);
                    				if(mysqli_num_rows($result)){
                    					while($row = mysqli_fetch_assoc($result)){
                          ?>
                          <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><img src="<?php echo $upload_dir.$row['image'] ?>" height="100"></td>
                            <td><?php echo $row['nama'] ?></td>
                            <td><?php echo $row['absen'] ?></td>
                            <td><?php echo $row['kelas'] ?></td>
                            <td class="text-center">
                              <a href="show.php?id=<?php echo $row['id'] ?>" class="btn btn-success"><i class="fa fa-eye"></i><span> View</span></a>
                              <a href="form.php?id=<?php echo $row['id'] ?>" class="btn btn-info"><i class="fa fa-user-edit"></i><span> Update</span></a>
                              <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash-alt"></i><span> Delete</span></a>
                            </td>
                          </tr>
                          <?php
                              }
                            }
                          ?>
                        </tbody>
                      </table>
                    </div>
                </div>
                <a class="btn btn-primary" href="create.php"><i class="fa fa-user-plus"></i><span> Create</span></a>
            </div>
        </div>
      </div>
  </body>
</html>
<?php
include 'partials/footer.php';
?>