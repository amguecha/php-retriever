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
	<title>Files | php-retriever </title>
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
		<span class="btn-link disabled">PHP Files</span><br>
		<a href="<?= DOMAIN . '/examples/cookie' ?>">PHP Cookie</a><br>
		<a href="<?= DOMAIN . '/examples/session' ?>">PHP Session</a><br>
		<a href="<?= DOMAIN . '/examples/read' ?>">MySQL Database</a><br>
		<a href="<?= DOMAIN . '/examples/icons' ?>">Bootstrap Icons</a><br>
		<a href="<?= DOMAIN . '/examples/content' ?>">Bootstrap Content</a><br>
		<a href="<?= DOMAIN . '/examples/components' ?>">Bootstrap Components</a><br>
		<hr>
		<h4><b>Using $_FILES soperglobal.</b></h4>
		<p><?= $result_message_memory ?></p>
		<hr>
		<p><b>UPLOAD AN IMAGE</b></p>
		<form action="<?= $files_action ?>" method='POST' enctype='multipart/form-data'>
			<div class="mb-1"></div>
			<input type="file" name="image">
			<div class="mb-3"></div>
			<input type="submit" name='submit_image' value="Submit">
		</form>
		<div class="mb-3"></div>
		<p><?= $result_message_image ?></p>
		<hr>
		<p><b>UPLOAD TWO OR MORE IMAGES</b></p>
		<form action="<?= $files_action ?>" method='POST' enctype='multipart/form-data'>
			<div class="mb-1"></div>
			<input type="file" name="images[]" multiple="multiple">
			<div class="mb-3"></div>
			<input type="submit" name='submit_images' value="Submit">
		</form>
		<div class="mb-3"></div>
		<p><?= $result_message_images ?></p>
		<hr>
		<p><b>UPLOAD A PDF DOCUMENT</b></p>
		<form action="<?= $files_action ?>" method='POST' enctype='multipart/form-data'>
			<div class="mb-1"></div>
			<input type="file" name="pdf">
			<div class="mb-3"></div>
			<input type="submit" name='submit_pdf' value="Submit">
		</form>
		<div class="mb-3"></div>
		<?= $result_message_pdf ?>
		<hr>
		<p><b>UPLOAD A VIDEO</b></p>
		<form action="<?= $files_action ?>" method='POST' enctype='multipart/form-data'>
			<div class="mb-1"></div>
			<input type="file" name="video">
			<div class="mb-3"></div>
			<input type="submit" name='submit_video' value="Submit">
		</form>
		<div class="mb-3"></div>
		<?= $result_message_video ?>
		<hr>
		<p><b>UPLOADED FILES</b></p>
		<?= $files_table ?>
	</div>
</body>

</html>