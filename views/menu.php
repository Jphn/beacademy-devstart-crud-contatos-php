<nav class="navbar navbar-expand-lg bg-light">
	<div class="container">
		<a class="navbar-brand" href="/">devNa</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
			aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-link <?php echo ( $_SERVER['REQUEST_URI'] === '/' ) ? 'active' : ''; ?>"
					aria-current="page" href="/">Home</a>
				<a class="nav-link <?php echo ( $_SERVER['REQUEST_URI'] === '/signup' ) ? 'active' : ''; ?>"
					href="/signup">Sign Up</a>
				<a class="nav-link <?php echo ( $_SERVER['REQUEST_URI'] === '/signin' ) ? 'active' : ''; ?>"
					href="/signin">Sign In</a>
				<a class="nav-link <?php echo ( $_SERVER['REQUEST_URI'] === '/list' ) ? 'active' : ''; ?>"
					href="/list">List</a>
			</div>
		</div>
	</div>
</nav>