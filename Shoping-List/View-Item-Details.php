<!DOCTYPE html>
<html>
<head>
	<title>Items Details - Shoping List Assignment</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<?php 
include_once("header.php");
?>
<div class="main-feature">
	<div class="container">
		<hr>
		<div class="row">
		<form>
			<div class="col-md-4">
				<div class="form-group">
				    
				    <input type="text" class="form-control" id="exampleInputName2" placeholder="Items">
				 </div>
			</div>	
			<div class="col-md-4">
				<div class="form-group">
				    
				    <input type="text" class="form-control" id="exampleInputName2" placeholder="Price">
				 </div>
			</div>	
			<div class="col-md-4">
				<div class="form-group">
				    <input type="text" class="form-control" id="exampleInputName2" placeholder="Location">
				 </div>
			</div>
			<div class="col-md-12 text-right">
			<div class="form-group">
		      <button type="submit" class="btn btn-success">Advance Search</button>
		  	</div>
		  	</div>
		</form>
		</div>
		<hr>
		<div class="row">
 		<div class="col-md-8">
 		<?php
                        require_once("db_connect.php");
                        $i_id=$_GET['itemid'];
                        $sql = "SELECT * FROM `items` WHERE `Item_ID`='$i_id'";
                        $conn->query("set character_set_results='utf8'");
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0 ) {
                            while($row = $result->fetch_assoc()) {
                                             
                                             
    ?>
    		<h2><?php echo $row['Item_Title']; ?></h2>	
  			  <a href="#" >
    		  <img class="img-responsive" src="<?php echo $row['Item_image']; ?>" alt="">
  			  </a>
  			<h3>Details:</h3>
  			<p><?php echo $row['Item_description']; ?></p>  
 		</div>
 		<div class="col-md-4 event_right_part">

 		<button  id="addedtocart" onclick="Addtocart();" class="btn btn-success btn-block">Add to Cart</button>
 		<hr>
 		<div class="well">
 			<i class="glyphicon glyphicon-calendar"></i><b><?php echo $row['dated']; ?></b>
 			
 			<br><br>
 			<i class="glyphicon glyphicon-euro"></i><b><?php echo $row['Item_price']; ?></b>
 		</div>
 		<hr>
 		<h3>Location</h3>
 		<?php echo $row['Item_location']; ?>
 		<img src="https://www.welt-atlas.de/datenbank/karten/karte-1-845.gif">
 		</div>
 		<?php 
                                                    
                                         }
                                     }
                                         
                              ?>
	</div>
		</div>
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