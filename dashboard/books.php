<?php
session_start();
include 'include/connection.php';
include 'include/header.php';
if (!isset($_SESSION['adminInfo'])) {
    header('Location:index.php');
} else {


?>

    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    
  <!-- Start Delete Book -->
  <?php
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM books WHERE id = '$id' ";
    $delete = mysqli_query($con, $query);
  }
  ?>
  <!-- End Delete book -->

    <div class="container-fluid">
        <div class="show-books">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Book Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Category</th>
                        <th scope="col">Date added </th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Fetch categories from database -->
                    <?php
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                    } else {
                        $page = 1;
                    }
                    $limit = 4;
                    $start = ($page - 1) * $limit;
                    $query = "SELECT * FROM books ORDER BY id DESC LIMIT $start, $limit";
                    $res = mysqli_query($con, $query);
                    $sNo = 0;
                    while ($row = mysqli_fetch_assoc($res)) {
                        $sNo++;
                    ?>
			
                        <tr>
                            <td><?php echo $sNo; ?></td>
                            <td><?php echo $row['bookTitle']; ?></td>
                            <td><?php echo $row['authorName']; ?></td>
                            <td><?php echo $row['bookCat']; ?></td>
                            <td><?php echo $row['bookDate']; ?></td>
                            <td>
                                <a href="edit-book.php?id=<?php echo $row['id']; ?>" class="custom-btn">Edit</a>
                                <a href="books.php?id=<?php echo $row['id']; ?>" class="custom-btn confirm">Delete</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
							  <?php
        $query = "SELECT * FROM books";
        $result = mysqli_query($con, $query);
        $total_cat = mysqli_num_rows($result);
        $total_pages = ceil($total_cat / $limit);
        ?>
					
					
  <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="books.php?page=<?php if (($page - 1) > 0) {
                                                                                    echo  $page - 1;
                                                                                  } else {
                                                                                    echo 1;
                                                                                  }

                                                                                  ?>">Previous</a></li>
            <?php
            for ($i = 1; $i <= $total_pages; $i++) {
            ?>
              <li class="page-item"><a class="page-link" href="books.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php
            }
            ?>
            <li class="page-item"><a class="page-link" href="books.php?page=<?php
                                                                                  if (($page + 1) < $total_pages) {
                                                                                    echo $page + 1;
                                                                                  } elseif (($page + 1) >= $total_pages) {
                                                                                    echo $total_pages;
                                                                                  }
                                                                                  ?>">Next</a></li>
          </ul>
		   </nav>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php
    include 'include/footer.php';
    ?>


<?php
}
?>