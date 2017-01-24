<!DOCTYPE html>
<html>
<head>
	<title>Manage Items - Shoping List Assignment</title>
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
		<div class="col-md-12">
			<a href="Add-Item.php"><button class="btn btn-success">Add Item</button></a>
		</div>
		<hr>
		<div class="col-md-12">
			<table class="table table-bordered">
				<thead>
					<th>Title</th>
					<th>City</th>
					<th>Description</th>
					<th>Price</th>
					<th>Actions</th>
				</thead>
				<tbody>
	<?php
                        require_once("db_connect.php");
                        $sql = "SELECT * FROM `items`";
                        $conn->query("set character_set_results='utf8'");
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0 ) {
                            while($row = $result->fetch_assoc()) {
                                             
                                             
    ?>	
					<tr>
						<td><?php echo substr($row['Item_Title'],0,30); ?></td>
						<td><?php echo $row['Item_location']; ?></td>
						<td><?php echo substr($row['Item_description'],0,30); ?></td>
						<td><i class="glyphicon glyphicon-eur"></i><?php echo $row['Item_price']; ?></td>
						<td style="display: inline;">
							<a href="<?php echo 'View-Item-Details.php?itemid='.$row['Item_ID'];?>"><button class="btn btn-default btn-sm" ><i class="glyphicon glyphicon-eur"></i> View</button></a>
							<a href="<?php echo 'Edit-Item.php?itemid='.$row['Item_ID'];?>"><button class="btn btn-success btn-sm" ><i class="glyphicon glyphicon-eur"></i> Edit</button></a>
							<a href="<?php echo 'Delete-Item.php?itemid='.$row['Item_ID'];?>"><button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" ><i class="glyphicon glyphicon-eur"></i> Delete</button></a>
						</td>
					</tr>
					 <?php 
                                                    
                                         }
                                     }
                                         
                              ?> 
					
					
				</tbody>
			</table>
			<!-- <table class="table">
  			 <th>
  			 	<td><img src="http://www.bikerringshop.com/v/vspfiles/catalog/black-evening-handbags.jpg"></td>
  			 	<td> Product Name</td>
  			 	<td>Price</td>
  			 	<td>Add</td>
  			 </th>
			</table> -->
				<!-- <img src="http://www.bikerringshop.com/v/vspfiles/catalog/black-evening-handbags.jpg"> -->
			<!-- <div class="container">
						<table id="cart" class="table table-hover table-condensed">
					    				<thead>
											<tr>
												<th style="width:70%">Product</th>
												<th style="width:10%">Price</th>
												<th style="width:8%">Quantity</th>
												<th style="width:22%" class="text-center">Subtotal</th>
												<th style="width:10%"></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td data-th="Product">
													<div class="row">
														<div class="col-sm-2 hidden-xs"><img src="http://www.bikerringshop.com/v/vspfiles/catalog/black-evening-handbags.jpg" alt="..." class="img-responsive"/></div>
														<div class="col-sm-10">
															<h4 class="nomargin">Product 1</h4>
															<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
														</div>
													</div>
												</td>
												<td data-th="Price">$1.99</td>
												<td data-th="Quantity">
													<input type="number" class="form-control text-center" value="1">
												</td>
												<td data-th="Subtotal" class="text-center">1.99</td>
												<td class="actions" data-th="">
													<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
													<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
												</td>
											</tr>
											<tr>
												<td data-th="Product">
													<div class="row">
														<div class="col-sm-2 hidden-xs"><img src="http://www.bikerringshop.com/v/vspfiles/catalog/black-evening-handbags.jpg" alt="..." class="img-responsive"/></div>
														<div class="col-sm-10">
															<h4 class="nomargin">Product 1</h4>
															<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
														</div>
													</div>
												</td>
												<td data-th="Price">$1.99</td>
												<td data-th="Quantity">
													<input type="number" class="form-control text-center" value="1">
												</td>
												<td data-th="Subtotal" class="text-center">1.99</td>
												<td class="actions" data-th="">
													<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
													<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
												</td>
											</tr>
											<tr>
												<td data-th="Product">
													<div class="row">
														<div class="col-sm-2 hidden-xs"><img src="http://www.bikerringshop.com/v/vspfiles/catalog/black-evening-handbags.jpg" alt="..." class="img-responsive"/></div>
														<div class="col-sm-10">
															<h4 class="nomargin">Product 1</h4>
															<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
														</div>
													</div>
												</td>
												<td data-th="Price">$1.99</td>
												<td data-th="Quantity">
													<input type="number" class="form-control text-center" value="1">
												</td>
												<td data-th="Subtotal" class="text-center">1.99</td>
												<td class="actions" data-th="">
													<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
													<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
												</td>
											</tr>
										</tbody>
										<tfoot>
											<tr class="visible-xs">
												<td class="text-center"><strong>Total 1.99</strong></td>
											</tr>
											<tr>
												<td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
												<td colspan="2" class="hidden-xs"></td>
												<td class="hidden-xs text-center"><strong>Total $1.99</strong></td>
												<td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
											</tr>
										</tfoot>
									</table>
					</div> -->
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