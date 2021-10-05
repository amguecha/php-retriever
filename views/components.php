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
	<title>Components | php-retriever </title>
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
		<a href="<?= DOMAIN . '/examples/cookie' ?>">PHP Cookie</a><br>
		<a href="<?= DOMAIN . '/examples/session' ?>">PHP Session</a><br>
		<a href="<?= DOMAIN . '/examples/read' ?>">MySQL Database</a><br>
		<a href="<?= DOMAIN . '/examples/icons' ?>">Bootstrap Icons</a><br>
		<a href="<?= DOMAIN . '/examples/content' ?>">Bootstrap Content</a><br>
		<span class="btn-link disabled">Bootstrap Components</span><br>
		<hr>
		<h4><b>Bootstrap components.</b></h4>
		<hr>
		<!-- Accordion list. -->
		<p><b>ACCORDION</b></p>
		<div class="accordion" id="accordionExample">
			<div class="accordion-item">
				<h2 class="accordion-header" id="headingOne">
					<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						Accordion Item #1
					</button>
				</h2>
				<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
					<div class="accordion-body">
						<strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="headingTwo">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						Accordion Item #2
					</button>
				</h2>
				<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
					<div class="accordion-body">
						<strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="headingThree">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						Accordion Item #3
					</button>
				</h2>
				<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
					<div class="accordion-body">
						<strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
					</div>
				</div>
			</div>
		</div>
		<hr>
		<!-- Alerts using different colors and links. -->
		<p><b>ALERTS</b></p>
		<div class="alert alert-success" role="alert">
			A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
		</div>
		<div class="alert alert-danger" role="alert">
			A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
		</div>
		<div class="alert alert-warning" role="alert">
			A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
		</div>
		<div class="alert alert-info" role="alert">
			A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
		</div>
		<hr>
		<!-- Live alert with a dismiss button. -->
		<p><b>LIVE ALERTS</b></p>
		<div id="liveAlertPlaceholder"></div>
		<button type="button" class="btn btn-primary" id="liveAlertBtn">Show live alert</button>
		<script>
			var alertPlaceholder = document.getElementById('liveAlertPlaceholder')
			var alertTrigger = document.getElementById('liveAlertBtn')

			function alert(message, type) {
				var wrapper = document.createElement('div')
				wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
				alertPlaceholder.append(wrapper)
			}
			if (alertTrigger) {
				alertTrigger.addEventListener('click', function() {
					alert('Nice, you triggered this alert message!', 'success')
				})
			}
		</script>
		<hr>
		<!-- Alert with additional content. -->
		<p><b>ALERTS WITH EXTRA CONTENT</b></p>
		<div class="alert alert-success" role="alert">
			<h4 class="alert-heading">Well done!</h4>
			<p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
			<hr>
			<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
		</div>
		<hr>
		<!-- Alerts with icons. -->
		<p><b>ALERTS WITH ICONS</b></p>
		<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
			<symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
				<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
			</symbol>
			<symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
				<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
			</symbol>
			<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
				<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
			</symbol>
		</svg>
		<div class="alert alert-primary d-flex align-items-center" role="alert">
			<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
				<use xlink:href="#info-fill" />
			</svg>
			<div>
				An example alert with an icon
			</div>
		</div>
		<div class="alert alert-success d-flex align-items-center" role="alert">
			<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
				<use xlink:href="#check-circle-fill" />
			</svg>
			<div>
				An example success alert with an icon
			</div>
		</div>
		<div class="alert alert-warning d-flex align-items-center" role="alert">
			<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:">
				<use xlink:href="#exclamation-triangle-fill" />
			</svg>
			<div>
				An example warning alert with an icon
			</div>
		</div>
		<div class="alert alert-danger d-flex align-items-center" role="alert">
			<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
				<use xlink:href="#exclamation-triangle-fill" />
			</svg>
			<div>
				An example danger alert with an icon
			</div>
		</div>
		<hr>
		<!-- Badges in headings. -->
		<p><b>BADGES IN HEADINGS</b></p>
		<h1>Example heading <span class="badge bg-secondary">New</span></h1>
		<h2>Example heading <span class="badge bg-secondary">New</span></h2>
		<h3>Example heading <span class="badge bg-secondary">New</span></h3>
		<hr>
		<!-- Badges in buttons. -->
		<p><b>BADGES IN BUTTONS</b></p>
		<button type="button" class="mb-1 btn btn-primary">
			Notifications <span class="badge bg-secondary">4</span>
		</button>
		<button type="button" class="mb-1 btn btn-primary position-relative mx-3">
			Inbox
			<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
				99+
				<span class="visually-hidden">unread messages</span>
			</span>
		</button>
		<button type="button" class="mb-1 btn btn-primary position-relative">
			Profile
			<span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
				<span class="visually-hidden">New alerts</span>
			</span>
		</button>
		<hr>
		<!-- Pill Badges. -->
		<p><b>PILL BADGES</b></p>
		<span class="badge rounded-pill bg-primary">Primary</span>
		<span class="badge rounded-pill bg-secondary">Secondary</span>
		<span class="badge rounded-pill bg-success">Success</span>
		<span class="badge rounded-pill bg-danger">Danger</span>
		<span class="badge rounded-pill bg-warning text-dark">Warning</span>
		<span class="badge rounded-pill bg-info text-dark">Info</span>
		<span class="badge rounded-pill bg-dark">Dark</span>
		<span class="badge rounded-pill bg-light text-dark">Light</span>
		<hr>
		<!-- Breadcrumbs. -->
		<p><b>BREADCRUMBS</b></p>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active" aria-current="page">Home</li>
			</ol>
		</nav>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Library</li>
			</ol>
		</nav>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Library</a></li>
				<li class="breadcrumb-item active" aria-current="page">Data</li>
			</ol>
		</nav>
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Library</li>
			</ol>
		</nav>
		<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Library</li>
			</ol>
		</nav>
		<hr>
		<!-- Different buttons using the tag <button>. -->
		<p><b>BUTTONS</b></p>
		<button type="button" class="btn btn-primary btn-block">Block</button>
		<div class="p-1"></div>
		<button type="button" class="btn btn-primary">Primary</button>
		<div class="p-1"></div>
		<button type="button" class="btn btn-secondary">Secondary</button>
		<div class="p-1"></div>
		<button type="button" class="btn btn-danger">Danger Button</button>
		<div class="p-1"></div>
		<button type="button" class="btn btn-success">Success Button</button>
		<div class="p-1"></div>
		<button type="button" class="btn btn-warning">Warning Button</button>
		<div class="p-1"></div>
		<button type="button" class="btn btn-dark">Dark Style Button</button>
		<div class="p-1"></div>
		<button type="button" class="btn btn-info">Information Button</button>
		<div class="p-1"></div>
		<button type="button" class="btn btn-outline-primary">Primary</button>
		<div class="p-1"></div>
		<button type="button" class="btn btn-outline-secondary">Secondary</button>
		<div class="p-1"></div>
		<button type="button" class="btn btn-outline-danger">Danger Button</button>
		<div class="p-1"></div>
		<button type="button" class="btn btn-outline-success">Success Button</button>
		<div class="p-1"></div>
		<button type="button" class="btn btn-outline-warning">Warning Button</button>
		<div class="p-1"></div>
		<button type="button" class="btn btn-outline-dark">Dark Style Button</button>
		<div class="p-1"></div>
		<button type="button" class="btn btn-outline-info">Information Button</button>
		<div class="p-1"></div>
		<button type="button" class="btn btn-primary btn-sm">Small Button</button>
		<div class="p-1"></div>
		<button type="button" class="btn btn-primary btn-lg">Large Button</button>
		<div class="p-1"></div>
		<button type="button" class="btn btn-lg btn-primary" disabled>Primary Disabled Button</button>
		<div class="p-1"></div>
		<div class="d-grid gap-2 d-md-block">
			<button class="btn btn-primary" type="button">Button 1</button>
			<button class="btn btn-primary" type="button">Button 2</button>
		</div>
		<div class="p-1"></div>
		<div class="d-grid gap-2">
			<button class="btn btn-primary" type="button">Button 3</button>
		</div>
		<hr>
		<!-- Different buttons using the tag <button>. -->
		<p><b>BIG CENTERED BUTTONS</b></p>
		<div class="p-1"></div>
		<div class="d-grid gap-2 col-6 mx-auto">
			<button class="btn btn-primary" type="button">Button 4</button>
			<button class="btn btn-primary" type="button">Button 5</button>
		</div>
		<hr>
		<!-- Different buttons using the tag <button>. -->
		<p><b>RIGHT ALIGNED BUTTONS</b></p>
		<div class="p-1"></div>
		<div class="d-grid gap-2 d-md-flex justify-content-md-end">
			<button class="btn btn-primary me-md-2" type="button">Button 6</button>
			<button class="btn btn-primary" type="button">Button 7</button>
		</div>
		<hr>
		<!-- Different buttons using the tag <input>. -->
		<p><b>BUTTONS IN GROUPS</b></p>
		<div class="btn-group-vertical" role="group" aria-label="Vertical radio toggle button group">
			<input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio1" autocomplete="off" checked="">
			<label class="btn btn-outline-danger" for="vbtn-radio1">Radio 1</label>
			<input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio2" autocomplete="off">
			<label class="btn btn-outline-danger" for="vbtn-radio2">Radio 2</label>
			<input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio3" autocomplete="off">
			<label class="btn btn-outline-danger" for="vbtn-radio3">Radio 3</label>
		</div>
		<div class="p-1"></div>
		<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
			<button type="button" class="btn btn-primary">1</button>
			<button type="button" class="btn btn-primary">2</button>
			<div class="btn-group" role="group">
				<button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
					Dropdown
				</button>
				<ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
					<li><a class="dropdown-item" href="#">Dropdown link</a></li>
					<li><a class="dropdown-item" href="#">Dropdown link</a></li>
				</ul>
			</div>
		</div>
		<div class="p-1"></div>
		<div class="btn-group" role="group" aria-label="Basic example">
			<button type="button" class="btn btn-primary">Left</button>
			<button type="button" class="btn btn-primary">Middle</button>
			<button type="button" class="btn btn-primary">Right</button>
		</div>
		<div class="p-1"></div>
		<div class="btn-group" role="group" aria-label="Basic outlined example">
			<button type="button" class="btn btn-outline-primary">Left</button>
			<button type="button" class="btn btn-outline-primary">Middle</button>
			<button type="button" class="btn btn-outline-primary">Right</button>
		</div>
		<div class="p-1"></div>
		<div class="btn-group">
			<a href="#" class="btn btn-primary active" aria-current="page">Active link</a>
			<a href="#" class="btn btn-primary">Link</a>
			<a href="#" class="btn btn-primary">Link</a>
		</div>
		<div class="p-1"></div>
		<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
			<input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
			<label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>
			<input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
			<label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>
			<input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
			<label class="btn btn-outline-primary" for="btnradio3">Radio 3</label>
		</div>
		<div class="p-1"></div>
		<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
			<div class="btn-group me-2 mb-1" role="group" aria-label="First group">
				<button type="button" class="btn btn-primary">1</button>
				<button type="button" class="btn btn-primary">2</button>
				<button type="button" class="btn btn-primary">3</button>
				<button type="button" class="btn btn-primary">4</button>
			</div>
			<div class="btn-group me-2 mb-1" role="group" aria-label="Second group">
				<button type="button" class="btn btn-secondary">5</button>
				<button type="button" class="btn btn-secondary">6</button>
				<button type="button" class="btn btn-secondary">7</button>
			</div>
			<div class="btn-group mb-1" role="group" aria-label="Third group">
				<button type="button" class="btn btn-info">8</button>
			</div>
		</div>
		<div class="p-1"></div>
		<div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
			<input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
			<label class="btn btn-outline-primary" for="btncheck1">Checkbox 1</label>
			<input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
			<label class="btn btn-outline-primary" for="btncheck2">Checkbox 2</label>
			<input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
			<label class="btn btn-outline-primary" for="btncheck3">Checkbox 3</label>
		</div>
		<hr>
		<!-- Cards. -->
		<p><b>CARDS</b></p>
		<div class="card" style="width: 18rem;">
			<img src="<?= DOMAIN ?>/uploads/test-image.png" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">Card title</h5>
				<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item">An item</li>
				<li class="list-group-item">A second item</li>
				<li class="list-group-item">A third item</li>
			</ul>
			<div class="card-body">
				<a href="#" class="card-link">Card link</a>
				<a href="#" class="card-link">Another link</a>
			</div>
		</div>
		<div class="p-1"></div>
		<div class="card">
			<div class="card-header">
				Featured
			</div>
			<div class="card-body">
				<h5 class="card-title">Special title treatment</h5>
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				<a href="#" class="btn btn-primary">Go somewhere</a>
			</div>
		</div>
		<div class="p-1"></div>
		<div class="card text-center">
			<div class="card-header">
				Featured
			</div>
			<div class="card-body">
				<h5 class="card-title">Special title treatment</h5>
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				<a href="#" class="btn btn-primary">Go somewhere</a>
			</div>
			<div class="card-footer text-muted">
				2 days ago
			</div>
		</div>
		<div class="p-1"></div>
		<div class="row">
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Special title treatment</h5>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Special title treatment</h5>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
		</div>
		<div class="p-1"></div>
		<div class="card text-center">
			<div class="card-header">
				<ul class="nav nav-tabs card-header-tabs">
					<li class="nav-item">
						<a class="nav-link active" aria-current="true" href="#">Active</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled">Disabled</a>
					</li>
				</ul>
			</div>
			<div class="card-body">
				<h5 class="card-title">Special title treatment</h5>
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				<a href="#" class="btn btn-primary">Go somewhere</a>
			</div>
		</div>
		<div class="p-1"></div>
		<div class="card" style="max-width: 540px;">
			<div class="row g-0">
				<div class="col-md-4">
					<img src="<?= DOMAIN ?>/uploads/test-image.png" class="img-fluid rounded-start" alt="...">
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					</div>
				</div>
			</div>
		</div>
		<div class="p-1"></div>
		<div class="card-group">
			<div class="card">
				<img src="<?= DOMAIN ?>/uploads/test-image.png" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
			</div>
			<div class="card">
				<img src="<?= DOMAIN ?>/uploads/test-image.png" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
			</div>
			<div class="card">
				<img src="<?= DOMAIN ?>/uploads/test-image.png" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
			</div>
		</div>
		<hr>
		<!-- Full carousel component. -->
		<p><b>CAROUSEL</b></p>
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" style="filter: invert(100%);" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" style="filter: invert(100%);" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" style="filter: invert(100%);" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?= DOMAIN ?>/uploads/test-image.png" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block text-dark">
						<h5>First slide label</h5>
						<p>Some representative placeholder content for the first slide.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="<?= DOMAIN ?>/uploads/test-image.png" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block text-dark">
						<h5>Second slide label</h5>
						<p>Some representative placeholder content for the second slide.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="<?= DOMAIN ?>/uploads/test-image.png" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block text-dark">
						<h5>Third slide label</h5>
						<p>Some representative placeholder content for the third slide.</p>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" style="filter: invert(100%);" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
				<span class="carousel-control-next-icon" style="filter: invert(100%);" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
		<hr>
		<!-- Collapse effect on areas. -->
		<p><b>COLLAPSE AREA</b></p>
		<p>
			<a class="btn btn-primary mb-1" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
				Link with href
			</a>
			<button class="btn btn-primary mb-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
				Button with data-bs-target
			</button>
		</p>
		<div class="collapse" id="collapseExample">
			<div class="card card-body">
				Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
			</div>
		</div>
		<hr>
		<!-- Dropdowns. -->
		<p><b>DROPDOWNS</b></p>
		<div class="btn-group">
			<button type="button" class="btn btn-danger">Action</button>
			<button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
				<span class="visually-hidden">Toggle Dropdown</span>
			</button>
			<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="#">Action</a></li>
				<li><a class="dropdown-item" href="#">Another action</a></li>
				<li><a class="dropdown-item" href="#">Something else here</a></li>
				<li>
					<hr class="dropdown-divider">
				</li>
				<li><a class="dropdown-item" href="#">Separated link</a></li>
			</ul>
		</div>
		<div class="p-1"></div>
		<div class="dropdown">
			<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
				Dropdown link
			</a>
			<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				<li><a class="dropdown-item" href="#">Action</a></li>
				<li><a class="dropdown-item" href="#">Another action</a></li>
				<li><a class="dropdown-item" href="#">Something else here</a></li>
			</ul>
		</div>
		<div class="p-1"></div>
		<div class="dropdown">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
				Dropdown button
			</button>
			<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
				<li><a class="dropdown-item" href="#">Action</a></li>
				<li><a class="dropdown-item" href="#">Another action</a></li>
				<li><a class="dropdown-item" href="#">Something else here</a></li>
			</ul>
		</div>
		<hr>
		<!-- List groups. -->
		<p><b>LIST GROUPS</b></p>
		<ul class="list-group">
			<li class="list-group-item active" aria-current="true">An active item</li>
			<li class="list-group-item disabled">A second item disabled</li>
			<li class="list-group-item">A third item</li>
		</ul>
		<div class="p-1"></div>
		<div class="list-group">
			<a href="#" class="list-group-item list-group-item-action active" aria-current="true">The current link item</a>
			<a href="#" class="list-group-item list-group-item-action disabled">A second disabled link item</a>
			<a href="#" class="list-group-item list-group-item-action">A third link item</a>
		</div>
		<div class="p-1"></div>
		<div class="list-group">
			<button type="button" class="list-group-item list-group-item-action active" aria-current="true">The current button</button>
			<button type="button" class="list-group-item list-group-item-action" disabled>A second disabled button item</button>
			<button type="button" class="list-group-item list-group-item-action">A third button item</button>
		</div>
		<div class="p-1"></div>
		<ul class="list-group list-group-flush">
			<li class="list-group-item">An item</li>
			<li class="list-group-item disabled">A second disabled item</li>
			<li class="list-group-item">A third item</li>
		</ul>
		<div class="p-1"></div>
		<div class="list-group">
			<a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
			<a href="#" class="list-group-item list-group-item-action list-group-item-danger">A simple danger list group item</a>
			<a href="#" class="list-group-item list-group-item-action list-group-item-warning">A simple warning list group item</a>
			<a href="#" class="list-group-item list-group-item-action list-group-item-info">A simple info list group item</a>
			<a href="#" class="list-group-item list-group-item-action list-group-item-dark">A simple dark list group item</a>
		</div>
		<div class="p-1"></div>
		<div class="list-group">
			<a href="#" class="list-group-item list-group-item-action active" aria-current="true">
				<div class="d-flex w-100 justify-content-between">
					<h5 class="mb-1">List group item heading</h5>
					<small>3 days ago</small>
				</div>
				<p class="mb-1">Some placeholder content in a paragraph.</p>
				<small>And some small print.</small>
			</a>
			<a href="#" class="list-group-item list-group-item-action">
				<div class="d-flex w-100 justify-content-between">
					<h5 class="mb-1">List group item heading</h5>
					<small class="text-muted">3 days ago</small>
				</div>
				<p class="mb-1">Some placeholder content in a paragraph.</p>
				<small class="text-muted">And some muted small print.</small>
			</a>
		</div>
		<div class="p-1"></div>
		<ul class="list-group">
			<li class="list-group-item">
				<input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
				First checkbox
			</li>
			<li class="list-group-item">
				<input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
				Second checkbox
			</li>
			<li class="list-group-item">
				<input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
				Third checkbox
			</li>
		</ul>
		<hr>
		<!-- Modal dialogs. -->
		<p><b>MODAL DIALOGS</b></p>
		<style>
			body {
				overflow: auto !important;
				padding-right: 0 !important;
			}
		</style>
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal_1">
			Launch demo modal
		</button>
		<div class="modal fade" id="exampleModal_1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						Modal content here...
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div>
		<div class="p-1"></div>
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
			Launch centered modal
		</button>
		<div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						This is a vertically centered modal...
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div>
		<div class="p-1"></div>
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
			Launch static backdrop modal
		</button>
		<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						Modal content here...
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Understood</button>
					</div>
				</div>
			</div>
		</div>
		<div class="p-1"></div>
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropLong">
			Launch static long backdrop modal
		</button>
		<div class="modal fade" id="staticBackdropLong" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<p>This is some placeholder content to show the scrolling behavior for modals. We use repeated line breaks to demonstrate how content can exceed minimum inner height, thereby showing inner scrolling. When content becomes longer than the prefedined max-height of modal, content will be cropped and scrollable within the modal.</p>
						<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
						<p>This content should appear at the bottom after you scroll.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div>
		<div class="p-1"></div>
		<div class="btn-group" role="group" aria-label="Basic example">
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button>
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Open modal for @fat</button>
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button>
		</div>
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">New message</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form>
							<div class="mb-3">
								<label for="recipient-name" class="col-form-label">Recipient:</label>
								<input type="text" class="form-control" id="recipient-name">
							</div>
							<div class="mb-3">
								<label for="message-text" class="col-form-label">Message:</label>
								<textarea class="form-control" id="message-text"></textarea>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Send message</button>
					</div>
				</div>
			</div>
		</div>
		<script>
			var exampleModal = document.getElementById('exampleModal')
			exampleModal.addEventListener('show.bs.modal', function(event) {
				// Button that triggered the modal
				var button = event.relatedTarget
				// Extract info from data-bs-* attributes
				var recipient = button.getAttribute('data-bs-whatever')
				// If necessary, you could initiate an AJAX request here and then do the updating in a callback.
				// Update the modal's content.
				var modalTitle = exampleModal.querySelector('.modal-title')
				var modalBodyInput = exampleModal.querySelector('.modal-body input')
				modalTitle.textContent = 'New message to ' + recipient
				modalBodyInput.value = recipient
			})
		</script>
		<hr>
		<!-- Navigation menus and tabs. -->
		<p><b>NAVIGATION USING LIST TAGS</b></p>
		<ul class="nav">
			<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="#">Active</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled">Disabled</a>
			</li>
		</ul>
		<hr>
		<!-- Navigation menus and tabs. -->
		<p><b>NAVIGATION USING LINK TAGS ONLY</b></p>
		<nav class="nav">
			<a class="nav-link active" aria-current="page" href="#">Active</a>
			<a class="nav-link" href="#">Link</a>
			<a class="nav-link disabled">Disabled</a>
		</nav>
		<hr>
		<!-- Navigation menus and tabs. -->
		<p><b>CENTERED NAVIGATION</b></p>
		<ul class="nav justify-content-center">
			<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="#">Active</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled">Disabled</a>
			</li>
		</ul>
		<hr>
		<!-- Navigation menus and tabs. -->
		<p><b>JUSTIFIED TO END NAVIGATION</b></p>
		<ul class="nav justify-content-end">
			<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="#">Active</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled">Disabled</a>
			</li>
		</ul>
		<hr>
		<!-- Navigation menus and tabs. -->
		<p><b>VERTICAL NAVIGATION</b></p>
		<ul class="nav flex-column">
			<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="#">Active</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled">Disabled</a>
			</li>
		</ul>
		<hr>
		<!-- Navigation menus and tabs. -->
		<p><b>TABS STYLE AND JS NAVIGATION</b></p>
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
				<p class="p-4">
					This is some placeholder content for the tab <b>1</b>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.
				</p>
			</div>
			<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				<p class="p-4">
					This is some placeholder content for the tab <b>2</b>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.
				</p>
			</div>
			<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
				<p class="p-4">
					This is some placeholder content for the tab <b>3</b>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.
				</p>
			</div>
		</div>
		<hr>
		<!-- Navigation menus and tabs. -->
		<p><b>PILLS STYLE NAVIGATION</b></p>
		<ul class="nav nav-pills">
			<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="#">Active</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled">Disabled</a>
			</li>
		</ul>
		<hr>
		<!-- Navigation menus and tabs. -->
		<p><b>FILL AND JUSTIFY NAVIGATION</b></p>
		<ul class="nav nav-pills nav-fill">
			<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="#">Active</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Much longer nav link</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled">Disabled</a>
			</li>
		</ul>
		<hr>
		<!-- Navigation menus and tabs. -->
		<p><b>TABS AND DROPDOWNS NAVIGATION</b></p>
		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="#">Active</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="#">Action</a></li>
					<li><a class="dropdown-item" href="#">Another action</a></li>
					<li><a class="dropdown-item" href="#">Something else here</a></li>
					<li>
						<hr class="dropdown-divider">
					</li>
					<li><a class="dropdown-item" href="#">Separated link</a></li>
				</ul>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled">Disabled</a>
			</li>
		</ul>
		<p class="p-4">This is some placeholder content for the tab <b>1</b>.</p>
		<hr>
		<!-- Navigation menus and tabs. -->
		<p><b>PILLS AND DROPDOWNS NAVIGATION</b></p>
		<ul class="nav nav-pills">
			<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="#">Active</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="#">Action</a></li>
					<li><a class="dropdown-item" href="#">Another action</a></li>
					<li><a class="dropdown-item" href="#">Something else here</a></li>
					<li>
						<hr class="dropdown-divider">
					</li>
					<li><a class="dropdown-item" href="#">Separated link</a></li>
				</ul>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled">Disabled</a>
			</li>
		</ul>
		<hr>
		<!-- Navigation bars. -->
		<p><b>NAVIGATION BARS</b></p>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
					<img src="http://localhost:8080/uploads/test-image.png" width="24" height="24" class="d-inline-block align-text-top">
					Default Navigation Bar
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Link</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Dropdown
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="#">Action</a></li>
								<li><a class="dropdown-item" href="#">Another action</a></li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li><a class="dropdown-item" href="#">Something else here</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled">Disabled</a>
						</li>
					</ul>
					<form class="d-flex">
						<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success" type="submit">Search</button>
					</form>
				</div>
			</div>
		</nav>
		<br>
		<nav class="navbar navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
					<img src="http://localhost:8080/uploads/test-image.png" width="24" height="24" class="d-inline-block align-text-top">
					Offcanvas Navigation Bar
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
					<div class="offcanvas-header">
						<h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
						<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
					</div>
					<div class="offcanvas-body">
						<ul class="navbar-nav justify-content-end flex-grow-1 pe-3 mb-3">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="#">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Link</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									Dropdown
								</a>
								<ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
									<li><a class="dropdown-item" href="#">Action</a></li>
									<li><a class="dropdown-item" href="#">Another action</a></li>
									<li>
										<hr class="dropdown-divider">
									</li>
									<li><a class="dropdown-item" href="#">Something else here</a></li>
								</ul>
							</li>
						</ul>
						<form class="d-flex">
							<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
							<button class="btn btn-outline-success" type="submit">Search</button>
						</form>
					</div>
				</div>
			</div>
		</nav>
		<hr>
		<!-- Offcanvas content. -->
		<p><b>OFFCANVAS CONTENT</b></p>
		<a class="btn btn-primary mb-1" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
			Link with href
		</a>
		<button class="btn btn-primary mb-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
			Button with data-bs-target
		</button>
		<br>
		<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
			<div class="offcanvas-header">
				<h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
				<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">
				<div>
					Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
				</div>
				<div class="dropdown mt-3">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
						Dropdown button
					</button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<li><a class="dropdown-item" href="#">Action</a></li>
						<li><a class="dropdown-item" href="#">Another action</a></li>
						<li><a class="dropdown-item" href="#">Something else here</a></li>
					</ul>
				</div>
			</div>
		</div>
		<hr>
		<!-- Pagination liks. -->
		<p><b>PAGINATION</b></p>
		<nav aria-label="Page navigation example">
			<ul class="pagination">
				<li class="page-item disabled">
					<a class="page-link">Previous</a>
				</li>
				<li class="page-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item active" aria-current="page">
					<a class="page-link" href="#">2</a>
				</li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item">
					<a class="page-link" href="#">Next</a>
				</li>
			</ul>
		</nav>
		<nav aria-label="...">
			<ul class="pagination pagination-lg">
				<li class="page-item active" aria-current="page">
					<span class="page-link">1</span>
				</li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
			</ul>
		</nav>
		<nav aria-label="Page navigation example">
			<ul class="pagination">
				<li class="page-item">
					<a class="page-link" href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
					</a>
				</li>
				<li class="page-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item">
					<a class="page-link" href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
					</a>
				</li>
			</ul>
		</nav>
		<nav aria-label="...">
			<ul class="pagination pagination-sm">
				<li class="page-item active" aria-current="page">
					<span class="page-link">1</span>
				</li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
			</ul>
		</nav>
		<hr>
		<!-- Centered pagination. -->
		<p><b>CENTERED PAGINATION</b></p>
		<nav aria-label="Page navigation example">
			<ul class="pagination justify-content-center">
				<li class="page-item disabled">
					<a class="page-link">Previous</a>
				</li>
				<li class="page-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item">
					<a class="page-link" href="#">Next</a>
				</li>
			</ul>
		</nav>
		<hr>
		<!-- Right aligned pagination. -->
		<p><b>RIGHT ALIGNED PAGINATION</b></p>
		<nav aria-label="Page navigation example">
			<ul class="pagination justify-content-end">
				<li class="page-item disabled">
					<a class="page-link">Previous</a>
				</li>
				<li class="page-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item">
					<a class="page-link" href="#">Next</a>
				</li>
			</ul>
		</nav>
		<hr>
		<!-- Placeholders. -->
		<p><b>PLACEHOLDERS</b></p>
		<div class="bd-example bd-example-placeholder-cards d-flex justify-content-around">
			<div class="card m-2 w-50">
				<svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
					<title>Placeholder</title>
					<rect width="100%" height="100%" fill="#20c997"></rect>
				</svg>
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-primary">Go somewhere</a>
				</div>
			</div>
			<div class="card m-2 w-50" aria-hidden="true">
				<svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
					<title>Placeholder</title>
					<rect width="100%" height="100%" fill="#868e96"></rect>
				</svg>
				<div class="card-body">
					<div class="h5 card-title placeholder-glow">
						<span class="placeholder col-6"></span>
					</div>
					<p class="card-text placeholder-glow">
						<span class="placeholder col-7"></span>
						<span class="placeholder col-4"></span>
						<span class="placeholder col-4"></span>
						<span class="placeholder col-6"></span>
						<span class="placeholder col-8"></span>
					</p>
					<a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-6"></a>
				</div>
			</div>
		</div>
		<hr>
		<!-- JS Popovers. -->
		<p><b>JS POPOVERS</b></p>
		<span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disabled popover">
			<button class="btn btn-primary" type="button" disabled>Disabled button</button>
		</span>
		<p class="mb-3"></p>
		<button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
		<p class="mb-3"></p>
		<button type="button" class="btn btn-secondary mb-1" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover">
			Popover on top
		</button>
		<button type="button" class="btn btn-secondary mb-1" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Right popover">
			Popover on right
		</button>
		<button type="button" class="btn btn-secondary mb-1" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">
			Popover on bottom
		</button>
		<button type="button" class="btn btn-secondary mb-1" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Left popover">
			Popover on left
		</button>
		<br>
		<script>
			var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
			var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
				return new bootstrap.Popover(popoverTriggerEl)
			});
		</script>
		<hr>
		<!-- Progress bars. -->
		<p><b>PROGRESS BARS</b></p>
		<div class="progress" style="height: 1px;">
			<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
		<br>
		<div class="progress" style="height: 20px;">
			<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
		<br>
		<div class="progress">
			<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
		<br>
		<div class="progress">
			<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
		</div>
		<br>
		<div class="progress">
			<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
		<br>
		<div class="progress">
			<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
		<br>
		<div class="progress">
			<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
		</div>
		<br>
		<div class="progress">
			<div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
		<br>
		<div class="progress">
			<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
		<hr>
		<!-- JS Scrollspy in deactivated list. -->
		<p><b>JS SCROLLSPY ON LIST</b></p>
		<script>
			var scrollSpyContentEl = document.getElementById('#list-example-to-scroll');
			var scrollSpy = bootstrap.ScrollSpy.getInstance(scrollSpyContentEl);
		</script>
		<!-- Some fixing to make this section work. -->
		<style>
			.bd-example-to-scroll {
				padding: 1rem;
				margin: 1rem -.75rem 0;
				margin-right: -0.75rem;
				margin-left: -0.75rem;
				border: solid #dee2e6;
				border-top-width: medium;
				border-right-width: medium;
				border-bottom-width: medium;
				border-left-width: medium;
				border-width: 1px 0 0;
			}
			.bd-example-to-scroll {
				padding: 1.5rem;
				margin-right: 0;
				margin-left: 0;
				border-width: 1px;
				border-radius: .25rem;
			}
			.scrollspy-example {
				position: relative;
				height: 9.5rem;
				margin-top: .5rem;
				overflow: auto;
			}
		</style>
		<div class="bd-example-to-scroll">
			<div class="row">
				<div class="col-4">
					<div id="list-example-to-scroll" class="list-group">
						<a class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a>
						<a class="list-group-item list-group-item-action" href="#list-item-2">Item 2</a>
						<a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
						<a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
					</div>
				</div>
				<div class="col-8">
					<div class="scrollspy-example" data-bs-spy="scroll" data-bs-target="#list-example-to-scroll" data-bs-offset="10" tabindex="0">
						<h4 id="list-item-1">Item 1</h4>
						<p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
						<br>
						<h4 id="list-item-2">Item 2</h4>
						<p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
						<br>
						<h4 id="list-item-3">Item 3</h4>
						<p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
						<br>
						<h4 id="list-item-4">Item 4</h4>
						<p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
						<br>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<!-- Spinners. -->
		<p><b>SPINNERS</b></p>
		<div class="spinner-border text-primary" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
		<div class="spinner-border text-secondary" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
		<div class="spinner-border text-success" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
		<div class="spinner-border text-danger" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
		<div class="spinner-border text-warning" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
		<div class="spinner-border text-info" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
		<div class="spinner-border text-dark" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
		<div class="spinner-border text-light" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
		<br class="mb-1">
		<div class="spinner-grow text-primary" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
		<div class="spinner-grow text-secondary" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
		<div class="spinner-grow text-success" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
		<div class="spinner-grow text-danger" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
		<div class="spinner-grow text-warning" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
		<div class="spinner-grow text-info" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
		<div class="spinner-grow text-dark" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
		<div class="spinner-grow text-light" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
		<br class="mb-1">
		<button class="btn btn-primary" type="button" disabled>
			<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
			Loading...
		</button>
		<div class="mb-1"></div>
		<button class="btn btn-primary" type="button" disabled>
			<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
			Loading...
		</button>
		<hr>
		<!-- Tooltips. -->
		<p><b>TOOLTIPS</b></p>
		<button type="button" class="btn btn-secondary mb-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
			Tooltip on top
		</button>
		<button type="button" class="btn btn-secondary mb-1" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">
			Tooltip on right
		</button>
		<button type="button" class="btn btn-secondary mb-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
			Tooltip on bottom
		</button>
		<button type="button" class="btn btn-secondary mb-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">
			Tooltip on left
		</button>
		<script>
			var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
			var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
				return new bootstrap.Tooltip(tooltipTriggerEl);
			});
		</script>
		<hr>
		<!-- Message toasts. -->
		<p><b>TOASTS</b></p>
		<button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>
		<div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
			<div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
				<div class="toast-header">
					<svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
						<rect width="100%" height="100%" fill="#007aff"></rect>
					</svg>
					<strong class="me-auto">Bootstrap</strong>
					<small>11 mins ago</small>
					<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
				</div>
				<div class="toast-body">
					Hello, world! This is a toast message.
				</div>
			</div>
		</div>
		<script>
			var toastTrigger = document.getElementById('liveToastBtn')
			var toastLiveExample = document.getElementById('liveToast')
			if (toastTrigger) {
				toastTrigger.addEventListener('click', function() {
					var toast = new bootstrap.Toast(toastLiveExample);
					toast.show();
				});
			}
		</script>
</body>

</html>