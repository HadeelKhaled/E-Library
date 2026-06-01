<?php
include 'include/connection.php';

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset ="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--Bootstrap css -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/custom.css">
<!--jQuery -->
<script src="js/jquery-3.4.1.min.js"></script>
<!--Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<!--================ start navbar Area  =================-->
<div class="navigation">
    <div class="logo">E Library</div>
    <ul>
        <li><a href="MainBookPage.php">Book</a></li>
        <li><a href="categories.php">Category</a></li>
        <li><a href="" class="btn-sign">
            <?php
            $query = "SELECT username FROM users";
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_assoc($result);
            echo $row['username'];
            ?>
        </a>
            <ul class="dropDown">
                <li><a href="Login Form/logout.php">Log out</a></li>
            </ul>
        </li>
    </ul>
    </div>
<!--================ end navbar Area  =================-->

<!--start show book -->
<div class="related-books">
    <div class="container">
        <div class="row">
        <?php 
            if(isset($_GET['category'])){
                $bookCat = $_GET['category'];
            }
            // fetch related books
            $query = "SELECT * FROM books WHERE bookCat = '$bookCat' ";
            $res = mysqli_query($con,$query);
            while($row = mysqli_fetch_assoc($res)){
            ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card text-center">
                            <div class="img-cover">
                                <img src="uploads\bookCovers/<?php echo $row['bookCover']; ?>" alt="Book Cover" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="BookDetails.php?id=<?php echo $row['id']; ?>&&category=<?php echo $row['bookCat']; ?>"><?php echo $row['bookTitle']; ?></a>
                                </h4>
                                <p class="card-text"><?php echo mb_substr($row['bookContent'], 0, 150, "UTF-8"); ?></p>
                                <a href="BookDetails.php?id=<?php echo $row['id']; ?>&&category=<?php echo $row['bookCat']; ?>">
                                    <button class="custom-btn">Download</button>
                                </a>
                            </div>
                        </div>
                    </div>           
            <?php
            }
        ?>
        </div>
    </div>
</div>
<!--end show book -->

	<!--================ start footer Area  =================-->
  <footer id="contact" style="margin-top: 2%;">      
      <div class="bottom">
          <span class="credit">
            All rights reserved  © 2022 | E-Library
          </span>
      </div>
    </footer>
	<!--================ End footer Area  =================-->

</body>

</html>
