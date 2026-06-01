<?php
include 'include/connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
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
</head>
<body>
<!--jQuery -->
<script src="js/jquery-3.4.1.min.js"></script>
<!--Bootstrap js -->
<script src="js/bootstrap.min.js"></script>

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

<!-- Start show book -->
<div class="books">
    <div class="container">
        <div class="book">
            <div class="row">
                <?php
                $query = "SELECT * FROM books WHERE id='$id'";
                $result = mysqli_query($con, $query);
                $row = mysqli_fetch_assoc($result);
                ?>
                <div class="col-md-4">
                    <div class="book-cover">
                        <img src="uploads\bookCovers/<?php echo $row['bookCover']; ?>" alt=" Book cover">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="book-content">
                        <h4><?php echo $row['bookTitle']; ?></h4>
                        <h5><?php echo $row['authorName']; ?></h5>
						<br>
					    <h6><?php echo $row['bookCat']; ?></h6>

                        <hr>
                        <p><?php echo $row['bookContent']; ?></p>
                        <button class="custom-btn" style="width: 160px">
                            <a href="uploads\books/<?php echo $row['book']; ?>" download>Download</a>
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End show book -->

<!-- Start Related Books -->
<div class="related-books">
    <div class="container">
        <h3>Related books</h3>
        <hr>
		<h4><?php echo $row['bookCat']; ?></h4>
        <div class="row">
        <?php 
            if(isset($_GET['category'])){
                $bookCat = $_GET['category'];
            }
            // fetch related books
            $query = "SELECT * FROM books WHERE bookCat = '$bookCat' AND id !='$id'";
            $res = mysqli_query($con,$query);
            while($row = mysqli_fetch_assoc($res)){
            ?>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="related-book text-center">
                    <div class="cover">
                        <a href="BookDetails.php?id=<?php echo $row['id']; ?>&&category=<?php echo $row['bookCat']; ?>">
                            <img src="uploads/bookCovers/<?php echo $row['bookCover']; ?>" alt="Book Cover">
                        </a>
                    </div>
                    <div class="title">
                        <h5>
                            <a href="BookDetails.php?id=<?php echo $row['id']; ?>&&category=<?php echo $row['bookCat'];?>"><?php echo $row['bookTitle']; ?></a>
                        </h5>
                    </div>
                </div>
            </div>            
            <?php
            }
        ?>
        </div>
    </div>
</div>
<!-- End Related Books -->
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
