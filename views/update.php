<div class="row justify-content-md-center">
	<div class="col-sm-12 d-flex justify-content-center">
		<h1>Update</h1>
	</div>
</div>
<div class="row justify-content-md-center">
	<form action="" method="post" class="col-sm-6">
		<div class="mb-3">
			<label for="exampleInputName1" class="form-label">Name</label>
			<input type="text" value="<?php echo $data[0]; ?>" name="name" class="form-control" id="exampleInputName1"
				aria-describedby="nameHelp" required>
		</div>
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Email</label>
			<input type="email" value="<?php echo $data[1]; ?>" name="email" class="form-control"
				id="exampleInputEmail1" aria-describedby="emailHelp" required>
		</div>
		<div class="mb-3">
			<label for="exampleInputPhone" class="form-label">Phone</label>
			<input type="tel" value="<?php echo $data[2]; ?>" name="phone" class="form-control" id="exampleInputPhone"
				required>
		</div>
		<button type="submit" class="btn btn-primary">Save changes</button>
	</form>
</div>