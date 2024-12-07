<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/style1.css">
</head>
<body>
<div class="container">
        <h1>Add Plan</h1>
       
        <form action="addplan   .php" method="post">
            <!-- <input type="hidden" name="p_id"> Hidden input to pass the id -->
            
            <div class="form-row">
                <div class="form-group">
                    <label for="titleName">Title Name</label>
                    <input type="text" id="titleName" name="titlename"  placeholder="Enter title" required>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" id="price" name="price"  placeholder="Enter price" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="packageDuration">Package Duration</label>
                    <input type="text" id="packageDuration" name="month"  placeholder="Enter month" required>
                </div>

                <div class="form-group">
                    <label for="category">Category</label>
                    <input type="text" id="category" name="category"  placeholder="Enter category" required>

                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" rows="4" placeholder="Enter description"></textarea>
                </div>
            </div>

            <button type="submit" class="submit-btn" name="update">Add Plan</button>
        </form>
    </div>
</body>
</html>
<?php 
include "connection.php";
if(isset($_REQUEST['update'])) {
        
   $fname = $_POST['titlename'];
   $price = $_POST['price'];
   $month = $_POST['month'];
   $cate = $_POST['category'];
   $des = $_POST['description'];
   $sql="insert into tbladdpackage(category,titlename,month,price,Description) values('$fname','$price','$month','$cate','$des')";
   $result=mysqli_query($con,$sql);
   if($result)
   {
    echo "<script>alert('Record Added successfully!');</script>";
    echo "<script>window.location.href='manage-post.php';</script>";
} else {
    echo "<script>alert('Failed to ADDED the record.');</script>";
}

}






?>

