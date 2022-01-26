<?php
    include('../server/connection.php');
	if(isset($_POST['add_product'])){
		$product_no 		= mysqli_real_escape_string($db, $_POST['product_no']);
		$product_name 		= mysqli_real_escape_string($db, $_POST['product_name']);
		$sell_price 		= mysqli_real_escape_string($db, $_POST['sell_price']);
		$quantity	= mysqli_real_escape_string($db, $_POST['quantity']);
		$unit		= mysqli_real_escape_string($db, $_POST['unit']);
	  	$min_stocks   	= mysqli_real_escape_string($db, $_POST['min_stocks']);
	  	$remarks   	= mysqli_real_escape_string($db, $_POST['remarks']);
	  	$location   	= mysqli_real_escape_string($db, $_POST['location']);
	  	$images   	= $_FILES['image']['name'];
		$user 		= $_SESSION['username'];
		
        $sql = "INSERT INTO `products`(`product_no`, `product_name`, `sell_price`, `quantity`, `unit`, `min_stocks`, `remarks`, `location`, `images`) VALUES ('$product_no','$product_name','$sell_price','$quantity','$unit','$min_stocks','$remarks','$location','$images')";

	  	$result = mysqli_query($db, $sql);
 		// if(move_uploaded_file($result == true){
 		// 	$query = "INSERT INTO logs (username,purpose) VALUES('$user','Product $product_name Added')";
 		// 	$insert = mysqli_query($db,$query);
		// 	header('location: ../delivery/add_delivery.php?success="1"');
	  	// }else{
		// 	$msg = "Something went wrong!";
	  	// }
	}
?>