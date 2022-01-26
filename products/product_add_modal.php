<?php 
	include('../products/add_products.php');
	include '../set.php';
	?>
<!DOCTYPE html>
<html>
<head>
	<?php include('../templates/head1.php');?>
</head>
<body>
	<div class="contain h-100">
		<?php 
			include('../products/base.php');
		?>
		<div class="main">
			<div class="side">
				<h1 class="ml-4"><i class="fas fa-user-friends"></i>Menaxhimi i Klienteve</h1>
				<hr>
			</div>
			<div class="first_side ml-5 mt-5 mr-3">
				<div style="border:1px dashed black; width: 250px;height: 250px;">
					<img class="img-fluid p-2 h-100 w-100" src="../images/customer.png">
				</div>
			<form method="post" enctype="multipart/form-data">
				<input type="hidden" name="size" class="form-control-sm" value="1000000">
				<input class="form-control-sm" type="file" name="image" required>
				<p class="bg-danger mt-3">
			</div>
			<div class="second_side">
					<table class="table-responsive mt-5">
						<tbody>
							<tr>
								<td  valign="baseline">Numri i Produktit:</td>
								<td class="pl-5 pb-2"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fas fa-pen-alt"></i></span></div><input type="text" name="product_no" class="form-control-sm form-control" placeholder="Id Produkti" required></div></td>
							</tr>
							<tr>
								<td  valign="baseline">Emer Produkti:</td>
								<td class="pl-5 pb-2"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fas fa-pen-alt"></i></span></div><input type="text" name="product_name" class="form-control-sm form-control" placeholder="Emer Produkti" required></div></td>
							</tr>
							<tr>
								<td  valign="baseline">Cmimi i Shitjes:</td>
								<td class="pl-5 pb-2"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span></div><textarea name="sell_price" required class="form-control-sm form-control" placeholder="Cmimi i Shitjes"  cols="23"></textarea></div></td>
							</tr>
							<tr>
								<td  valign="baseline">Sasia:</td>
								<td class="pl-5 pb-2"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fas fa-phone"></i></span></div><input type="text" name="quantity" class="form-control-sm form-control" placeholder="Sasia" required></div></td>
							</tr>
							<tr>
								<td  valign="baseline">Njesia:</td>
								<td class="pl-5 pb-2"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fas fa-phone"></i></span></div><input type="text" name="unit" class="form-control-sm form-control" placeholder="Njesia" required></div></td>
							</tr>
							<tr>
								<td  valign="baseline">Gjendja:</td>
								<td class="pl-5 pb-2"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fas fa-phone"></i></span></div><input type="text" name="min_stocks" class="form-control-sm form-control" placeholder="Gjendja Minimale" required></div></td>
							</tr>
							<tr>
								<td  valign="baseline">Pershkrimi:</td>
								<td class="pl-5 pb-2"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fas fa-phone"></i></span></div><input type="text" name="remarks" class="form-control-sm form-control" placeholder="Pershkrimi" required></div></td>
							</tr>
							<tr>
								<td  valign="baseline">Vendndodhja:</td>
								<td class="pl-5 pb-2"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fas fa-phone"></i></span></div><input type="text" name="location" class="form-control-sm form-control" placeholder="Vendndodhja" ></div></td>
							</tr>
							<tr>
								<td  valign="baseline">Foto:</td>
								<td class="pl-5 pb-2"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fas fa-phone"></i></span></div><input type="text" name="images" class="form-control-sm form-control" placeholder="Foto" ></div></td>
							</tr>
						</tbody>
					</table>
					<div class="text-left mt-4">
						<button type="submit" name="add_product" class="btn btn-secondary"><i class="fas fa-thumbs-up"></i> Konfirmo</button>
						<button class="btn btn-danger" onclick="window.location.href='../products/products.php'" ><i class="fas fa-ban"></i>Anullo</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="../bootstrap4/jquery/jquery.min.js"></script>
	<script src="../bootstrap4/js/bootstrap.bundle.min.js"></script>
	<script>
		$(function () {
  			$('[data-toggle="popover"]').popover()
	})
	</script>
</body>
</html>