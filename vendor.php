<?php
include('header.php');
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Vendor Page</title>
</head>
<body>
<br><br><br>
<center><h1>Vendor Page</h1></center>
<?php //echo $_SESSION['loginE'];
    $msg ="";
    if(isset($_POST['upload'])){
        //the path to store the uploaded image
        $target = "images/".basename($_FILES['image']['name']);
        include('connection.php');

        //get all submitted data from the form
        $image = $_FILES['image']['name'];

        $text = $_POST['text'];
       $category = $_POST["cat"];
        $SessionID = $_SESSION['loginE'];

        $sql = "INSERT INTO `product`(`vID`, `ImgURL`, `DESCRIPTION`, `CAT`, `STATUS`) 
        VALUES ('$SessionID','$image','$text','$category','pending')";
       
        mysqli_query($con,$sql);
        if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
            $msg = "Image uploaded successfully";
        }else{
            $msg = "There was a problem with uploading image...";
        }

    }
?>

<form method="POST" enctype="multipart/form-data"> 
        <input type="hidden" name = "size" value="1000000">
        <input type="file" name="image">
        <textarea name="text" cols="40" rows="4" placeholder="Say something about this image..."></textarea>

        <select name="cat" >
					<option selected>Select Category</option>
					<option>Clothes & Shoes</option>
					<option>Wholesalers</option>
                    <option>House & Home</option>
                    <option>etc</option>

		</select required>

        <input type="submit" name="upload" value="Upload Image"> 
</form>

</body>