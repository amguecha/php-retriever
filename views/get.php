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
	<title>Get | php-retriever </title>
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
		<span class="btn-link disabled">PHP Get</span><br>
		<a href="<?= DOMAIN . '/examples/post' ?>">PHP Post</a><br>
		<a href="<?= DOMAIN . '/examples/files' ?>">PHP Files</a><br>
		<a href="<?= DOMAIN . '/examples/cookie' ?>">PHP Cookie</a><br>
		<a href="<?= DOMAIN . '/examples/session' ?>">PHP Session</a><br>
		<a href="<?= DOMAIN . '/examples/read' ?>">MySQL Database</a><br>
		<a href="<?= DOMAIN . '/examples/icons' ?>">Bootstrap Icons</a><br>
		<a href="<?= DOMAIN . '/examples/content' ?>">Bootstrap Content</a><br>
		<a href="<?= DOMAIN . '/examples/components' ?>">Bootstrap Components</a><br>
		<hr>
		<h4><b>Using $_GET superglobal.</b></h4>
		<hr>
		<form method="GET" action="<?= $get_action ?>" class="pb-3 pt-2">
			<input class="mb-1" type="text" name="data" value="Hey there!">
			<input class="mb-1" type="submit" value="Submit">
		</form>
		<?= $get_data ?>
	</div>
</body>

</html>