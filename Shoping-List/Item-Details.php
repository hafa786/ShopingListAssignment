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
  			  <a href="#" >
    		  <img class="img-responsive" src="https://fthmb.tqn.com/Y5CZYRvcCiboeqyAoL_h-0B4Mp0=/768x0/filters:no_upscale()/about/halloween-party-game-56a325465f9b58b7d0d095cd.jpg" alt="">
  			  </a>
  			<h3>Details:</h3>
  			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>  
 		</div>
 		<div class="col-md-4 event_right_part">
 		<button class="btn btn-success btn-block">Add to Cart</button>
 		<hr>
 		<div class="well">
 			<i class="glyphicon glyphicon-calendar"></i><b>28 November, 2016</b>
 			
 			<br><br>
 			<i class="glyphicon glyphicon-euro"></i><b>10,00</b>
 		</div>
 		<hr>
 		<h3>Location</h3>
 		<img src="https://www.welt-atlas.de/datenbank/karten/karte-1-845.gif">
 		</div>
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