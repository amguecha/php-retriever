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
	<title>Content | php-retriever </title>
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
		<span class="btn-link disabled">Bootstrap Content</span><br>
		<a href="<?= DOMAIN . '/examples/components' ?>">Bootstrap Components</a><br>
		<hr>
		<h4><b>Bootstrap content.</b></h4>
		<hr>
		<!-- Headings h1, h2, h3... -->
		<p><b>HEADINGS</b></p>
		<h1>h1. Bootstrap heading</h1>
		<h2>h2. Bootstrap heading</h2>
		<h3>h3. Bootstrap heading</h3>
		<h4>h4. Bootstrap heading</h4>
		<h5>h5. Bootstrap heading</h5>
		<h6>h6. Bootstrap heading</h6>
		<hr>
		<!-- Custom headings. -->
		<p><b>CUSTOM HEADINGS</b></p>
		<h3>Fancy display heading <small class="text-muted">With faded secondary text</small></h3>
		<hr>
		<!-- Display headings. -->
		<p><b>DISPLAY HEADINGS</b></p>
		<h1 class="display-1">Display 1</h1>
		<h1 class="display-2">Display 2</h1>
		<h1 class="display-3">Display 3</h1>
		<h1 class="display-4">Display 4</h1>
		<h1 class="display-5">Display 5</h1>
		<h1 class="display-6">Display 6</h1>
		<hr>
		<!-- Lists, ordererd and the opposite. -->
		<p><b>LISTS</b></p>
		<ul>
			<li>Lorem ipsum dolor sit amet</li>
			<li>Consectetur adipiscing elit</li>
			<li>Integer molestie lorem at massa</li>
			<li>Facilisis in pretium nisl aliquet</li>
			<li>Nulla volutpat aliquam velit
				<ul>
					<li>Phasellus iaculis neque</li>
					<li>Purus sodales ultricies</li>
					<li>Vestibulum laoreet porttitor sem</li>
					<li>Ac tristique libero volutpat at</li>
				</ul>
			</li>
			<li>Faucibus porta lacus fringilla vel</li>
			<li>Aenean sit amet erat nunc</li>
			<li>Eget porttitor lorem</li>
		</ul>
		<ol>
			<li>Lorem ipsum dolor sit amet</li>
			<li>Consectetur adipiscing elit</li>
			<li>Integer molestie lorem at massa</li>
			<li>Facilisis in pretium nisl aliquet</li>
			<li>Nulla volutpat aliquam velit</li>
			<li>Faucibus porta lacus fringilla vel</li>
			<li>Aenean sit amet erat nunc</li>
			<li>Eget porttitor lorem</li>
		</ol>
		<dl>
			<dt>Description lists</dt>
			<dd>A description list is perfect for defining terms.</dd>
			<dt>Term</dt>
			<dd>Definition for the term.</dd>
			<dd>A second definition for the same term.</dd>
			<dt>Another term</dt>
			<dd>Definition for this other term.</dd>
		</dl>
		<ul class="list-inline">
			<li class="list-inline-item">This is a list item.</li>
			<li class="list-inline-item">And another one.</li>
			<li class="list-inline-item">But they're displayed inline.</li>
		</ul>
		<hr>
		<!-- Inline code. -->
		<p><b>INLINE CODE</b></p>
		<p>For example, <code>&lt;section&gt;</code> should be wrapped as inline.</p>
		<hr>
		<!-- Variables. -->
		<p><b>VARIABLES</b></p>
		<var>y</var> = <var>m</var><var>x</var> + <var>b</var>
		<hr>
		<!-- User inputs. -->
		<p><b>USER INPUTS</b></p>
		To switch directories, type <kbd>cd</kbd> followed by the name of the directory.<br>
		To edit settings, press <kbd><kbd>ctrl</kbd> + <kbd>,</kbd></kbd>
		<hr>
		<!-- Sample outputs. -->
		<p><b>SAMPLE OUTPUTS</b></p>
		<samp>This text is meant to be treated as sample output from a computer program.</samp>
		<hr>
		<!-- Pointer on buttons. -->
		<p><b>POINTERS ON BUTTONS</b></p>
		<span role="button" tabindex="0">Non-button element button</span>
		<hr>
		<!-- Lead Paragraphs. -->
		<p><b>LEAD PARAGRAPHS</b></p>
		<p class="lead">This is a lead paragraph. It stands out from regular paragraphs.</p>
		<hr>
		<!-- Inline text elements Paragraphs. -->
		<p><b>INLINE TEXT ELEMENTS</b></p>
		<p>You can use the mark tag to <mark>highlight</mark> text.</p>
		<p><del>This line of text is meant to be treated as deleted text.</del></p>
		<p><s>This line of text is meant to be treated as no longer accurate.</s></p>
		<p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
		<p><strong>This line rendered as bold text.</strong></p>
		<p><em>This line rendered as italicized text.</em></p>
		<p><u>This line of text will render as underlined.</u></p>
		<p><small>This line of text is meant to be treated as fine print.</small></p>
		<hr>
		<!-- Blockquote and source. -->
		<p><b>BLOCKQUOTE AND SOURCE</b></p>
		<figure>
			<blockquote class="blockquote">
				<p>A well-known quote, contained in a blockquote element.</p>
			</blockquote>
			<figcaption class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></figcaption>
		</figure>
		<hr>
		<!-- Responsive full sized image. -->
		<p><b>RESPONSIVE IMAGES</b></p>
		<img src="<?= DOMAIN ?>/uploads/test-image.png" class="img-fluid" alt="Responsive image">
		<hr>
		<!-- Floated left and right images. Floating elements requires a clearfix after all floatings. -->
		<p><b>FLOATED IMAGES</b></p>
		<img src="<?= DOMAIN ?>/uploads/test-image.png" height="200" width="200" class="mb-1 rounded float-start" alt="...">
		<img src="<?= DOMAIN ?>/uploads/test-image.png" height="200" width="200" class="mb-1 rounded float-end" alt="...">
		<div class="clearfix"></div>
		<hr>
		<!-- Centered image (mx-auto). -->
		<p><b>CENTER ALIGN IMAGES</b></p>
		<img src="<?= DOMAIN ?>/uploads/test-image.png" height="200" width="200" class="rounded mx-auto d-block" alt="...">
		<hr>
		<!-- Thumbnails. -->
		<p><b>IMAGE THUMBNAILS</b></p>
		<img src="<?= DOMAIN ?>/uploads/test-image.png" height="200" width="200" alt="..." class="img-thumbnail">
		<hr>
		<!-- Image figures, aligned left and right. -->
		<p><b>IMAGE FIGURES</b></p>
		<figure class="figure">
			<img src="<?= DOMAIN ?>/uploads/test-image.png" height="300" width="300" class="figure-img img-fluid rounded mr-3 mb-3" alt="...">
			<figcaption class="figure-caption">A caption for the above image.</figcaption>
		</figure>
		<figure class="figure">
			<img src="<?= DOMAIN ?>/uploads/test-image.png" height="300" width="300" class="figure-img img-fluid rounded mr-3 mb-3" alt="...">
			<figcaption class="figure-caption text-center mr-3">A caption for the above image.</figcaption>
		</figure>
		<figure class="figure">
			<img src="<?= DOMAIN ?>/uploads/test-image.png" height="300" width="300" class="figure-img img-fluid rounded mr-3 mb-3" alt="...">
			<figcaption class="figure-caption text-end mr-3">A caption for the above image.</figcaption>
		</figure>
		<br>
		<!-- Standard table. -->
		<p><b>STANDARD TABLE</b></p>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">First</th>
					<th scope="col">Last</th>
					<th scope="col">Handle</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Jacob</td>
					<td>Thornton</td>
					<td>@fat</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td colspan="2">Larry the Bird</td>
					<td>@twitter</td>
				</tr>
			</tbody>
		</table>
		<hr>
		<!-- Different table color variants. -->
		<p><b>TABLE VARIANTS</b></p>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Class</th>
					<th scope="col">Heading</th>
					<th scope="col">Heading</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">Default</th>
					<td>Cell</td>
					<td>Cell</td>
				</tr>
				<tr class="table-primary">
					<th scope="row">Primary</th>
					<td>Cell</td>
					<td>Cell</td>
				</tr>
				<tr class="table-secondary">
					<th scope="row">Secondary</th>
					<td>Cell</td>
					<td>Cell</td>
				</tr>
				<tr class="table-success">
					<th scope="row">Success</th>
					<td>Cell</td>
					<td>Cell</td>
				</tr>
				<tr class="table-danger">
					<th scope="row">Danger</th>
					<td>Cell</td>
					<td>Cell</td>
				</tr>
				<tr class="table-warning">
					<th scope="row">Warning</th>
					<td>Cell</td>
					<td>Cell</td>
				</tr>
				<tr class="table-info">
					<th scope="row">Info</th>
					<td>Cell</td>
					<td>Cell</td>
				</tr>
				<tr class="table-light">
					<th scope="row">Light</th>
					<td>Cell</td>
					<td>Cell</td>
				</tr>
				<tr class="table-dark">
					<th scope="row">Dark</th>
					<td>Cell</td>
					<td>Cell</td>
				</tr>
			</tbody>
		</table>
		<hr>
		<!-- Standard table with a dark title. -->
		<p><b>DARK HEAD TABLE</b></p>
		<table class="table">
			<thead class="table-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">First</th>
					<th scope="col">Last</th>
					<th scope="col">Handle</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Jacob</td>
					<td>Thornton</td>
					<td>@fat</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td>Larry</td>
					<td>the Bird</td>
					<td>@twitter</td>
				</tr>
			</tbody>
		</table>
		<hr>
		<!-- Table with striped rows to improve data visibility. -->
		<p><b>STRIPPED ROWS TABLE</b></p>
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">First</th>
					<th scope="col">Last</th>
					<th scope="col">Handle</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Jacob</td>
					<td>Thornton</td>
					<td>@fat</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td>Larry</td>
					<td>the Bird</td>
					<td>@twitter</td>
				</tr>
			</tbody>
		</table>
		<hr>
		<!-- Dark variant of a striped table. -->
		<p><b>STRIPPED ROWS DARK TABLE</b></p>
		<table class="table table-striped table-dark">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">First</th>
					<th scope="col">Last</th>
					<th scope="col">Handle</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Jacob</td>
					<td>Thornton</td>
					<td>@fat</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td>Larry</td>
					<td>the Bird</td>
					<td>@twitter</td>
				</tr>
			</tbody>
		</table>
		<hr>
		<!-- Simple table with all borders. -->
		<p><b>BORDERED TABLE</b></p>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">First</th>
					<th scope="col">Last</th>
					<th scope="col">Handle</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Jacob</td>
					<td>Thornton</td>
					<td>@fat</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td colspan="2">Larry the Bird</td>
					<td>@twitter</td>
				</tr>
			</tbody>
		</table>
		<hr>
		<!-- Simple table with all borders, DARK. -->
		<p><b>BORDERED DARK TABLE</b></p>
		<table class="table table-bordered table-dark">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">First</th>
					<th scope="col">Last</th>
					<th scope="col">Handle</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Jacob</td>
					<td>Thornton</td>
					<td>@fat</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td colspan="2">Larry the Bird</td>
					<td>@twitter</td>
				</tr>
			</tbody>
		</table>
		<hr>
		<!-- Simple table with hover property. -->
		<p><b>HOVER TABLE</b></p>
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">First</th>
					<th scope="col">Last</th>
					<th scope="col">Handle</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Jacob</td>
					<td>Thornton</td>
					<td>@fat</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td colspan="2">Larry the Bird</td>
					<td>@twitter</td>
				</tr>
			</tbody>
		</table>
		<hr>
		<!-- Active section in table. -->
		<p><b>ACTIVE SECTION IN TABLE</b></p>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">First</th>
					<th scope="col">Last</th>
					<th scope="col">Handle</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Jacob</td>
					<td>Thornton</td>
					<td>@fat</td>
				</tr>
				<tr class="table-active">
					<th scope="row">3</th>
					<td colspan="2">Larry the Bird</td>
					<td>@twitter</td>
				</tr>
			</tbody>
		</table>
		<hr>
	</div>
</body>

</html>