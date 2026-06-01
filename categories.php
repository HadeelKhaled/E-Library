<?php
include 'include/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>category </title>
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/categories.css" />
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/bootstrap.css">
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

    <section>
      <div class="roww">
        <h2 class="section-heading">Classify the books in the library</h2>
      </div>
      <div class="row">

      <?php
    $sql = "SELECT * FROM categories";
  	$result = $con ->query($sql);
    if($result->num_rows>0){
  	$book="";
	  while($row=$result->fetch_assoc()){
					
            ?>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <img src="images/123.png" alt="">
            </div>
            <h3><a href="BookByCategory.php?id=<?php echo $row['id']; ?>&&category=<?php echo $row['categoryName']; ?>">
            <?php echo $row['categoryName']; ?></h3>
          </div>
        </div>
      <?php
                }
            } else {
                ?>
                <div class="text-center">There are no categories</div>
            <?php
            }
            ?>  
    <?php
    ?>
    </div>
    </section>
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