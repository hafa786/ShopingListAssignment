<!DOCTYPE html>
<html>
<head>
	<title>Manage Items - Shoping List Assignment</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php 
include_once("header.php");
?>
<div class="main-feature">
	<div class="container">
  <?php 
if (isset($_POST['btn_update'])) {
 require_once("db_connect.php");
 $i_id=$_GET['itemid'];
 $title=mysql_real_escape_string($_POST["title"]);
 $price=mysql_real_escape_string($_POST["price"]);
 $Email=mysql_real_escape_string($_POST["Email"]);
 $Location=mysql_real_escape_string($_POST["Location"]);
 $Description=mysql_real_escape_string($_POST["Description"]);
 $target_dir = "uploads/";
 $code = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 15)), 0, 30);
$image = $target_dir .$code. basename($_FILES["image"]["name"]);
	if (!empty($_FILES["image"]["name"])) {
			if (move_uploaded_file($_FILES["image"]["tmp_name"], $image)) {
				 $sql = "UPDATE items SET  Item_Title='$title',Item_price= '$price',Item_email='$Email',Item_location='$Location',Item_image='$image',Item_description='$Description' WHERE Item_ID='$i_id'";
				        
				        if ($conn->query($sql) == TRUE) { 
				            $last_id = $conn->insert_id;      
				            $success_msg="Thanks. Your item has been updated successfully.<br>";
				                
				                
				        }
				        else{
				   			 $error_msg="Error: " . $sql . "<br>" . $conn->error;
				    	}
  			}
	}
	else{
		if (move_uploaded_file($_FILES["image"]["tmp_name"], $image)) {
				 $sql = "UPDATE items SET  Item_Title='$title',Item_price= '$price',Item_email='$Email',Item_location='$Location',Item_description='$Description' WHERE Item_ID='$i_id'";
				        
				        if ($conn->query($sql) == TRUE) { 
				            $last_id = $conn->insert_id;      
				            $success_msg="Thanks. Your item has been updated successfully.<br>";
				                
				                
				        }
				        else{
				   			 $error_msg="Error: " . $sql . "<br>" . $conn->error;
				    	}
  			}
	}
			
}
?> 		
		<div class="row">
		<div class="col-md-8">
		<?php
if (isset($success_msg)) {
?>
<div style="color:white;background-color:green;">
<div class="alert alert-success fade in">
<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
<h4>Success</h4>
<p><?php echo $success_msg; ?> </p>
</div>
</div>
<?php
}
?>
<?php
if (isset($error_msg)) {
?>
<div style="color:white;background-color:red;"></div>
<div class="alert alert-danger fade in">
     <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
      <h4>Error</h4>
      <p><?php echo $error_msg; ?> </p>
</div>
<?php
}
?>
<?php
                        require_once("db_connect.php");
                        $i_id=$_GET['itemid'];
                        $sql = "SELECT * FROM `items` WHERE `Item_ID`='$i_id'";
                        $conn->query("set character_set_results='utf8'");
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0 ) {
                            while($row = $result->fetch_assoc()) {
                                             
                                             
    ?>
			<form method="post" enctype="multipart/form-data">
			<h3>Add New Item</h3>
				<div class="form-group">
				    <label for="exampleInputEmail1">Product Title</label>
				    <input type="text" class="form-control" name="title" value="<?php echo $row['Item_Title']; ?>" required="" placeholder="Title">
				</div>
			
				<div class="form-group">
				    <label for="exampleInputEmail1">Price</label>
				    <input type="text" class="form-control" name="price" value="<?php echo $row['Item_price']; ?>" required="" placeholder="Price">
				</div>
				<div class="form-group">
				    <label for="exampleInputEmail1">Product image</label>
				    <input type="file" class="form-control" name="image" value="<?php echo $row['Item_image']; ?>" required="">
				</div>
				<div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control" name="Email" value="<?php echo $row['Item_email']; ?>" placeholder="Email" required="">
				</div>
				<div class="form-group">
				    <label for="exampleInputEmail1">Location</label>
				    <input type="text" class="form-control" name="Location" value="<?php echo $row['Item_location']; ?>" placeholder="Location" required="">
				</div>
				 <div class="form-group">
				 <label for="exampleInputEmail1">Product Details</label>
				    <textarea rows="10"  class="form-control" required=""  name="Description"><?php echo $row['Item_description']; ?></textarea>
				 </div>
			
			<div class="form-group">
		      <button type="submit" name="btn_update" class="btn btn-success">Add New Item</button>
		  	</div>
		  	
		</form>
		<?php 
                                                    
                                         }
                                     }
                                         
                              ?>
		</div>
		
		</div>
		<hr>
		
	</div>
</div>
<?php 
include_once("footer.php");
?>
<div class="copyright">
	<div class="container">
		<center>Shoping List Assignment</center>
	</div>
</div>
</body>
</html>