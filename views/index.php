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
	<title>Index | php-retriever </title>
	<!-- Styles -->
	<style></style>
</head>

<body>
	<!-- Example content. Delete it to start a clean project. -->
	<div style="margin: 30vh 0;">
		<h1 class="display-1 text-center mx-3">
			<img src="<?= DOMAIN ?>/images/favicon.ico"></img>
			php-retriever
		</h1>
		<p class="py-2 text-center mx-3">
			Simple MVC Front Controller Mini Framework (v.0.2)
		</p>
		<nav class="nav justify-content-center mx-3">
			<div id="buttons-group" class="btn-group">
				<a class="btn btn-sm btn-outline-primary" href="examples/page" target="_blank">Examples</a>
				<a class="btn btn-sm btn-outline-primary" href="https://github.com/amguecha/php-retriever" target="_blank">GitHub</a>
				<a class="btn btn-sm btn-outline-primary" href="https://getbootstrap.com/" target="_blank">Bootstrap</a>
			</div>
		</nav>
	</div>
	<script>
		var currentWidth = window.innerWidth;
		if (currentWidth < 480) {
			document.getElementById('buttons-group').classList.remove('btn-group');
			document.getElementById('buttons-group').classList.add('btn-group-vertical');
		} else if (currentWidth > 480) {
			document.getElementById('buttons-group').classList.remove('btn-group-vertical');
			document.getElementById('buttons-group').classList.add('btn-group');
		};
		window.addEventListener('resize', function(event) {
			var newWidth = window.innerWidth;
			if (newWidth < 480) {
				document.getElementById('buttons-group').classList.remove('btn-group');
				document.getElementById('buttons-group').classList.add('btn-group-vertical');
			} else if (newWidth > 480) {
				document.getElementById('buttons-group').classList.remove('btn-group-vertical');
				document.getElementById('buttons-group').classList.add('btn-group');
			}
		});
	</script>
</body>

</html>
