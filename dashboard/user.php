<?php
session_start();
include 'include/connection.php';
include 'include/header.php';


if (!isset($_SESSION['adminInfo'])) {
  header('Location:index.php');
  exit;
} else {


?>

  <!-- /#sidebar-wrapper -->

  <!-- Page Content -->

  <!-- Start Delete user -->
  <?php
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM users WHERE id = '$id'";
    $delete = mysqli_query($con, $query);
  }
  ?>
  <!-- End Delete user -->

  <?php

  if ($_SERVER["REQUEST_METHOD"] == "POST")  {
	    $id = $_POST["id"];
      $username=$_POST ["username"];
      $email =$_POST ["email"];
      $password =$_POST ["password"];

      $query ="INSERT INTO users (id , username , email , password) VALUES('$id' , '$username','$email','$password')";

      $result = mysqli_query($con, $query);
      if (isset($result)) {
        $catSuccess =  "<div class='alert alert-success'>" . "User added". "</div>";
      }
    }
  }

  ?>

  <div class="container-fluid">
    <!-- Start user section -->
    <div class="user">
      <?php
      if (isset($catErro)) {
        echo $catErro;
      }
      if (isset($catSuccess)) {
        echo $catSuccess;
      }
      ?>
      <div class="add-cat">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          <div class="form-group">
		        <h2>Add New User</h2><br>
		        <label for="cat">User Number</label>
            <input type="text" id="cat" class="form-control" name="id">
            <label for="cat">Full Name</label>
            <input type="text" id="cat" class="form-control" name="username">
		       	<label for="cat">Email</label>
            <input type="text" id="cat" class="form-control" name="email">
		      	<label for="cat">Password</label>
            <input type="password" id="cat" class="form-control" name="password">
          </div>
          <button class="custom-btn">Add</button>
        </form>
      </div>
      <div class="show-cat">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Number</th>
              <th scope="col">Full Name</th>
			        <th scope="col">Email</th>
              <th scope="col">Password</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- Fetch user from database -->
            <?php
            if (isset($_GET['page'])) {
              $page = $_GET['page'];
            } else {
              $page = 1;
            }
            $limit = 4;
            $start = ($page - 1) * $limit;
            $query = "SELECT * FROM users ORDER BY id DESC LIMIT $start, $limit";
            $res = mysqli_query($con, $query);
            $sNo = 0;
            while ($row = mysqli_fetch_assoc($res)) {
              $sNo++;
            ?>

              <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username']; ?></td>
	        			<td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td>
                  <a href="user.php?id=<?php echo $row['id']; ?>" class="custom-btn confirm">Delete</a>
                </td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
        <!-- Start pagination -->
        <?php
        $query = "SELECT * FROM users ";
        $result = mysqli_query($con, $query);
        $total_cat = mysqli_num_rows($result);
        $total_pages = ceil($total_cat / $limit);
        ?>
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="user.php?page=<?php if (($page - 1) > 0) {
                                                                                    echo  $page - 1;
                                                                                  } else {
                                                                                    echo 1;
                                                                                  }

                                                                                  ?>">Previous</a></li>
            <?php
            for ($i = 1; $i <= $total_pages; $i++) {
            ?>
              <li class="page-item"><a class="page-link" href="user.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php
            }
            ?>
            <li class="page-item"><a class="page-link" href="user.php?page=<?php
                                                                                  if (($page + 1) < $total_pages) {
                                                                                    echo $page + 1;
                                                                                  } elseif (($page + 1) >= $total_pages) {
                                                                                    echo $total_pages;
                                                                                  }
                                                                                  ?>">Next</a></li>
          </ul>
        </nav>
        <!-- End pagination -->
      </div>
    </div>
    <!-- End user section -->
  </div>
  <!-- /#page-content-wrapper -->
  </div>
  <!-- /#wrapper -->
  <?php
  include 'include/footer.php';
  ?>
