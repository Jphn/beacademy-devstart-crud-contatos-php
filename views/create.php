<div class="row justify-content-md-center">
	<div class="col-sm-12 d-flex justify-content-center">
		<h1>Add a contact</h1>
	</div>
</div>
<div class="row justify-content-md-center">
	<form action="" method="post" class="col-sm-6">
		<div class="mb-3">
			<label for="exampleInputName1" class="form-label">Name</label>
			<input type="text" name="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp"
				required>
			<div id="nameHelp" class="form-text">Type his full name.</div>
		</div>
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Email</label>
			<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
				required>
			<div id="emailHelp" class="form-text">Type a valid email here.</div>
		</div>
		<div class="mb-3">
			<label for="exampleInputPhone" class="form-label">Phone</label>
			<input type="tel" name="phone" class="form-control" id="exampleInputPhone" required>
		</div>
		<div class="mb-3 form-check">
			<input type="checkbox" class="form-check-input" id="exampleCheck1">
			<label class="form-check-label" for="exampleCheck1">I'm not a robot</label>
		</div>
		<button type="submit" class="btn btn-primary">Sign Up</button>
	</form>
</div>