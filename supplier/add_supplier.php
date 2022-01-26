<?php 
	include('../supplier/add.php');
	include '../set.php';
?>
<!DOCTYPE html>
<html>
<head>
	<?php include('../templates/head1.php');?>
</head>
<body>
	<div class="contain h-100">
		<?php include('../supplier/base.php');?>
		<div class="main">
			<div class="side">
				<h1 class="ml-4 mt-2"><i class="fas fa-user-tie"></i>Menaxhimi i Furnizuesve</h1>
				<hr>
			</div>
			<div class="first_side ml-5 mt-5 mr-3">
				<div style="border:1px dashed black; width: 250px;height: 250px;">
					<img class="img-fluid p-2 h-100 w-100" src="../images/Worker.png">
				</div>
			<form method="post" enctype="multipart/form-data">
				<input type="hidden" name="size" class="form-control-sm" value="1000000">
				<input class="form-control-sm" type="file" name="image" required>
				<p class="bg-danger mt-3"><?php echo $msg;?></p>
			</div>
			<div class="second_side ml-3">
					<table class="table-responsive mt-5 ">
						<p><?php include('../error.php');?></p>
						<tbody>
							<tr>
								<td  valign="baseline">Emri Produktit:</td>
								<td class="pl-5 pb-2"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fas fa-pen-alt"></i></span></div><input type="text" name="com_name" pattern="[A-Za-z-0-9]+" title="Name must not contain numbers or spaces. e.g John12" class="form-control-sm form-control" placeholder="Vendos emrin e produktit" required></div></td>
							</tr>
							<tr>
								<td  valign="baseline">Sasia:</td>
								<td class="pl-5 pb-2"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fas fa-pen-alt"></i></span></div><input type="text" name="firstname" pattern="[0-9]+" title="Name must not contain numbers or spaces e.g John12" class="form-control-sm form-control" placeholder="Vendos sasine" required></div></td>
							</tr>
							<tr>
								<td  valign="baseline">Njesia:</td>
								<td class="pl-5 pb-2"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fas fa-pen-alt"></i></span></div><input type="text" name="com_name" pattern="[A-Za-z-0-9]+" title="Name must not contain numbers or spaces. e.g John12" class="form-control-sm form-control" placeholder="Vendos njesine" required></div></td>
							</tr>
							<tr>
								<td  valign="baseline">Data:</td>
								<td class="pl-5 pb-2"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fas fa-pen-alt"></i></span></div><textarea name="address" required pattern="[A-Za-z0-9]+" class="form-control-sm form-control" placeholder="Enter Address" cols="23"></textarea></div></td>
							</tr>
							<tr>
								<td  valign="baseline">Totali:</td>
								<td class="pl-5 pb-2"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fas fa-pen-alt"></i></span></div><input type="text" pattern="[A-Za-z0-9]+"  class="form-control-sm form-control" name="number" placeholder="Vendso totalin" required></div></td>
							</tr>
						</tbody>
					</table>
					<div class="text-left mt-4">
						<button type="submit" name="add" class="btn btn-secondary"><i class="fas fa-thumbs-up"></i> Konfirmo</button>
						<button class="btn btn-danger" onclick="window.location.href='../supplier/supplier.php'" ><i class="fas fa-ban"></i>Anullo</button>
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