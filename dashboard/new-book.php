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

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $bookTitle = $_POST['bookTitle'];
        $authorName = $_POST['authorName'];
        $bookCat = $_POST['bookCat'];
        $bookContent = $_POST['bookContent'];
        // Book Cover
        $imageName = $_FILES['bookCover']['name'];
        $imageTmp = $_FILES['bookCover']['tmp_name'];

        // Book file
        $bookName = $_FILES['book']['name'];
        $bookTmp = $_FILES['book']['tmp_name'];

        if (empty($bookTitle) || empty($authorName) || empty($bookCat) || empty($bookContent)) {
            $error = "<div class='alert alert-danger'>" . "Please fill in the fields below" . "</div>";
        } elseif (empty($imageName)) {
            $error = "<div class='alert alert-danger'>" . "Please choose a suitable image." . "</div>";
        } elseif (empty($bookName)) {
            $error = "<div class='alert alert-danger'>" . "Please select a book file." . "</div>";
        } else {
            // Book cover
            $bookCover = rand(0, 1000) . "_" . $imageName;
            move_uploaded_file($imageTmp, "../uploads/bookCovers/" . $bookCover);
            // Book cover
            $book = rand(0, 1000) . "_" . $bookName;
            move_uploaded_file($bookTmp, "../uploads/books/" . $book);
            $query = "INSERT INTO books(bookTitle,authorName,bookCat,bookCover,book,bookContent)
            VALUES('$bookTitle','$authorName','$bookCat','$bookCover','$book','$bookContent')";
            $res = mysqli_query($con, $query);
            if (isset($res)) {
                $success = "<div class='alert alert-success'>" . "Book added successfully" . "</div>";
            }
        }
    }
    ?>

    <div class="container-fluid">
        <!-- Start new book -->
        <div class="new-book">
            <?php
            if (isset($error)) {
                echo $error;
            } elseif (isset($success)) {
                echo $success;
            }

            ?>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Book Title</label>
                    <input type="text" id="title" class="form-control" name="bookTitle" value="<?php if (isset($bookTitle)) {
                                                                                                    echo $bookTitle;
                                                                                                } ?>">
                </div>
                <div class="form-group">
                    <label for="author">Author's name</label>
                    <input type="text" id="author" class="form-control" name="authorName" value="<?php if (isset($authorName)) {
                                                                                                        echo $authorName;
                                                                                                    } ?>">
                </div>
                <div class="form-group">
                    <label for="title">Category</label>
                    <select class="form-control" name="bookCat">
                        <option></option>
                        <?php
                        $query = "SELECT categoryName FROM categories";
                        $result = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <option><?php echo $row['categoryName']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="img">Book Cover</label>
                    <input type="file" class="form-control" name="bookCover">
                </div>
                <div class="form-group">
                    <label for="img">PDF Book</label>
                    <input type="file" class="form-control" name="book">
                </div>
                <div class="form-group">
                    <label for="img">Description</label>
                    <textarea name="bookContent" id="" cols="30" rows="10" class="form-control"><?php if (isset($bookContent)) {
                                                                                                    echo $bookContent;
                                                                                                } ?></textarea>
                </div>
                <button class="custom-btn">Add Book</button>
            </form>
        </div>
        <!-- End new book -->
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