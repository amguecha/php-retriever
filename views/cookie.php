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
	<title>Cookies | php-retriever </title>
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
		<a href="<?= DOMAIN . '/examples/page' ?>">Page</a><br>
		<a href="<?= DOMAIN . '/examples/get' ?>">PHP Get</a><br>
		<a href="<?= DOMAIN . '/examples/post' ?>">PHP Post</a><br>
		<a href="<?= DOMAIN . '/examples/files' ?>">PHP Files</a><br>
		<span class="btn-link disabled">PHP Cookie</span><br>
		<a href="<?= DOMAIN . '/examples/session' ?>">PHP Session</a><br>
		<a href="<?= DOMAIN . '/examples/read' ?>">MySQL Database</a><br>
		<a href="<?= DOMAIN . '/examples/icons' ?>">Bootstrap Icons</a><br>
		<a href="<?= DOMAIN . '/examples/content' ?>">Bootstrap Content</a><br>
		<a href="<?= DOMAIN . '/examples/components' ?>">Bootstrap Components</a><br>
		<hr>
		<h4><b>Using $_COOKIE superglobal.</b></h4>
		<hr>
		<a href="<?= $set_cookie ?>">Set cookie</a>
		<br>
		<a href="<?= $remove_cookie ?>">Remove cookie</a>
		<div class="mb-3"></div>
		<?= $cookie_data ?>
	</div>
</body>

</html>