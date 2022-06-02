<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DevStart - Jphn</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
	<header>
		<?php

include './views/menu.php';

?>
	</header>
	<main class="container mt-5">

		<?php

$url = explode( '?', $_SERVER['REQUEST_URI'] );

include './acoes.php';

match( $url[0] ) {
    '/' => homePage(),
    '/signin' => signInPage(),
    '/signup' => signUpPage(),
    '/list' => listPage(),
    '/delete' => deletePage(),
    '/update' => updatePage(),
default=> notFound404Page()
};

?>
	</main>
</body>

</html>