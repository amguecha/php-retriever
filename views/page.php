<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Favicons, bootstrap, viewport and charset meta. All required. -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/x-icon" href="<?= DOMAIN ?>/images/favicon.ico">
	<link rel="shortcut icon" type="image/x-icon" href="<?= DOMAIN ?>/images/favicon.ico">
	<link rel="stylesheet" href="<?= DOMAIN ?>/css/bootstrap/bootstrap-css-5.1.1.css">
	<link rel="stylesheet" href="<?= DOMAIN ?>/css/bootstrap/bootstrap-icons-1.5.0.css">
	<script src="<?= DOMAIN ?>/js/bootstrap/bootstrap-js-5.1.1.js"></script>
	<!-- Page title -->
	<title>Page | php-retriever </title>
	<!-- Styles -->
	<style></style>
</head>

<body>
	<!-- Example content. -->
	<div class="p-3">
		<h1><img style="height: 28px; width: 28px;" src="<?= DOMAIN ?>/images/favicon.ico"></img> php-retriever</h1>
		<hr>
		<h3>Examples in: <b>/views/<?= $current_file ?></b></h3>
		<hr>
		<span class="btn-link disabled">Page</span><br>
		<a href="<?= DOMAIN . '/examples/get' ?>">PHP Get</a><br>
		<a href="<?= DOMAIN . '/examples/post' ?>">PHP Post</a><br>
		<a href="<?= DOMAIN . '/examples/files' ?>">PHP Files</a><br>
		<a href="<?= DOMAIN . '/examples/cookie' ?>">PHP Cookie</a><br>
		<a href="<?= DOMAIN . '/examples/session' ?>">PHP Session</a><br>
		<a href="<?= DOMAIN . '/examples/read' ?>">MySQL Database</a><br>
		<a href="<?= DOMAIN . '/examples/icons' ?>">Bootstrap Icons</a><br>
		<a href="<?= DOMAIN . '/examples/content' ?>">Bootstrap Content</a><br>
		<a href="<?= DOMAIN . '/examples/components' ?>">Bootstrap Components</a><br>
		<hr>
		<h4><b>Getting data from view, model and controller.</b></h4>
		<hr>
		<p>Variable 1: <?= "Hi from the view !!!" ?></p>
		<p>Variable 2: <?= $hello_from_model ?></p>
		<p>Variable 3: <?= $hello_from_controller ?></p>
	</div>
</body>

</html>