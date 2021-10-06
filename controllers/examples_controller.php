<?php

/**
 * Examples controller. The router calls it 
 * when 'domain.com/-examples-/-?-' is 
 * requested through URL. 
 * 
 * It has different methods, for some
 * examples.
 * 
 */
class examples_controller
{
	/** Method to call 'fontawesome.php' view */
    public function icons()
    {
		$loader = new retriever( 'view_type' );	
		$loader->include_file( 'icons.php' );
		$loader->include_data([ 
			'current_file' => $loader->file	
		  ]);
		$loader->render_view();
    }

    /** Method to call 'content.php' view */
	public function content()
    {
		$loader = new retriever( 'view_type' );	
		$loader->include_file( 'content.php' );
		$loader->include_data([ 
			'current_file' => $loader->file	
		  ]);
		$loader->render_view();
    }

    /** Method to call 'components.php' view */
    public function components()
    {
		$loader = new retriever( 'view_type' );	
		$loader->include_file( 'components.php' );
		$loader->include_data([ 
			'current_file' => $loader->file	
		  ]);
		$loader->render_view();
    }

    /**
	 * Method that calls 'get.php', also 
	 * receives data from $_GET and passes
	 * it to the view if it's set and not
	 * empty.
	 * 
	 */
    public function get()
    {
		$loader = new retriever( 'view_type' );	
		$loader->include_file( 'get.php' );
		
		/** Processing data */
		$get_data = "";
		if( isset($_GET['data']) ){
			if( !empty($_GET['data']) ){
				$get_data = '<p><b>Received via $_GET:</b> ' . $_GET['data'] . '</p>';
			}
		}

		/** Assigning data to view and rendering */
		$loader->include_data([ 
			'get_data'  => $get_data,
			'get_action'  => DOMAIN . '/examples/get',
			'current_file' => $loader->file	
			]);
		$loader->render_view();
	}
	
    /** Method to call 'page.php' view, including a model method. */
    public function page()
    {
		/** 1.- Loading a model (it includes the model file and instantiates it). */
    	$loader = new retriever( 'model_type' );
		$loader->include_file( 'examples_model.php' );
		$model = $loader->load_model();

    	/** 2.- Loading a view (it saves the file to be rendered). */
		$loader = new retriever( 'view_type' );	
		$loader->include_file( 'page.php' ); 

		/** 3.- Doing some 'logic'... delcaring some variables, etc... */
		$current_file = $loader->file;
		$hello_from_model = $model->page();
		$hello_from_controller = 'Hi from the controller !!!';

		/** 
		 * 4.- Loading data into an array, to grab it later from 
		 * the view (this creates a 'context' for the view).
		 * 
		 */
		$loader->include_data([
			'current_file' => $current_file,
			'hello_from_model' => $hello_from_model,
			'hello_from_controller' => $hello_from_controller
		]);

		/** 
		 * 5.- Rendering the view (it includes the previously selected 
		 * file and makes the loaded data usable in the view).
		 * 
		 */
		$loader->render_view();
    }

    /**
	 * Method that calls 'post.php', also 
	 * receives data from $_POST and passes
	 * it to the view if it's set and not
	 * empty.
	 * 
	 */
    public function post()
    {
		$loader = new retriever( 'view_type' );	
		$loader->include_file( 'post.php' );

		/** Processing data */
		$post_data = "";
		if( isset($_POST['data']) ){
			if( !empty($_POST['data']) ){
				$post_data = '<p><b>Received via $_POST:</b> ' . $_POST['data'] . '</p>';
			}
		}
		$post_action =  DOMAIN . '/examples/post';
		$current_file = $loader->file;

		/** Assigning data to view and rendering */
		$loader->include_data([ 
			'post_data'  => $post_data,
			'post_action'  => $post_action,
			'current_file' => $current_file	
			]);
		$loader->render_view();
    }

    /**
	 * Simple method that manages uploading/removing
	 * and displaying files. It could be improved to
	 * prevent malicius attacks.
	 * 
	 */
    public function files()
    {
	    /**
		 * Main variables of the method. Location
		 * of the uploads and result messages of
		 * each operation..
		 * 
		 */
	   	$uploads_path = ROOT . "public_html/uploads/";
	   	$result_message_memory = '';
    	$result_message_image = '';
    	$result_message_images = '';
    	$result_message_pdf = '';
    	$result_message_video = '';

	    /**
		 * Check for files bigger than the ihi.php
		 * and reports it to the user, stopping 
		 * further operations. 
		 * 
		 */
    	if( isset($_SERVER["CONTENT_LENGTH"]) ){
    		/** 
    		 * The problem is that trying to upload big files results in empty $_POST and $_FILES
    		 * so, no error can be catched and reported back to the user. That's why we chenck 
    		 * in $_SERVER.
    		 * 
    		 */
		    if ($_SERVER["CONTENT_LENGTH"] > ( (int)ini_get('post_max_size') * 1024 * 1024) ){
		        $result_message_memory = 'ERROR: Files are too big, try smaller files.';
		    }
		}

		/** Uploading only ONE image */
		if( isset($_POST['submit_image']) ) {
			if( isset($_FILES['image']) && $_FILES['image']['size'] != 0 ) {
				
				$error_check = [];

				/** Checking lenght of the name, 80 chars allowed */
				if( strlen($_FILES['image']['name']) > 80 ){
					$error_check[] = 'Filename is too long.';
				}

				/** Checking type of file */
				$allowed_types = array( 'image/jpeg', 'image/png' );
				$detected_type = mime_content_type($_FILES['image']['tmp_name']);
				if( !in_array( $detected_type, $allowed_types ) ){
					$error_check[] = 'Not allowed image format.';
				}

				/** Checking that file has only one suffix, no more: file.php.png ... */
				if( substr_count($_FILES['image']['name'], '.') > 1 ) {
					$error_check[] = 'Not supported file format.';
				}

				/** Checking for other PHP error codes */
				if( $_FILES['image']['error'] ) {
					$error_check[] = 'Error code ' . $_FILES['image']['error'] . '.';
				}

				/** Creating a random-unique new name */
				$original_name = explode(".", $_FILES["image"]["name"]);
				$modified_name = uniqid() . '.' . end($original_name);
				
				/** If no errors, and file is checked for upload, then uploading the file, otherwise -> ERROR */
				if( empty($error_check) && is_uploaded_file($_FILES['image']['tmp_name']) ){
					move_uploaded_file( $_FILES["image"]["tmp_name"], $uploads_path . $modified_name );
				}else{
					$result_message_image = 'ERROR: ' . implode(' ', $error_check) . ' TRY AGAIN.';
				}
			}else{
				$result_message_image = 'No file selected.';
			}
		}

		/** Uploading TWO or MORE images */
		if( isset($_POST['submit_images']) ) {

			/** Counting the number of files that will be uploaded */
			$total_images = count(array_filter($_FILES['images']['name']));

			/** Checking if there is data in $_FILES and if there are files to upload, then loading them */
			if( isset($_FILES['images']) && $total_images != 0 ) {

				/** Variables to store errors and allowed filetypes before looping */
				$errors_check = [];
				$allowed_types = array( 'image/jpeg', 'image/png' );

				/** Loop to check each file and store possible errors */
				for( $i = 0; $i < $total_images; $i++ ){

					/** 1.- Checking name lenght */
					if( strlen($_FILES['images']['name'][$i]) > 80 ){
						$errors_check[$i][] = 'Filename is too long.';
					}else{ $errors_check[$i][] = ''; }

					/** 2.- Checking the file type */
					$detected_type = mime_content_type($_FILES['images']['tmp_name'][$i]);
					if( !in_array( $detected_type, $allowed_types ) ){
						$errors_check[$i][] = 'Not allowed image format.';
					}else{ $errors_check[$i][] = ''; }

					/** 3.- Checking if the pointed file does not have this -> file.php.jpg ... */
					if( substr_count($_FILES['images']['name'][$i], '.') > 1 ){
						$errors_check[$i][] = 'Not supported file format.';
					}else{ $errors_check[$i][] = ''; }

					/** 4.- Checking if files are set to be uploaded by the user */
					if( !is_uploaded_file($_FILES['images']['tmp_name'][$i]) ){
						$errors_check[$i][] = 'Image can not be uploaded' . '.'; 
					}else{ $errors_check[$i][] = ''; }

					/** 5.- Checking if there are no other associated errors with the upload */
					if( $_FILES['images']['error'][$i] ){
						$errors_check[$i][] = 'Error code ' . $_FILES['images']['error'][$i] . '.';
					}else{ $errors_check[$i][] = ''; }

				}

				/** Empty string variable to saver errors later on */
				$errors_string = NULL;

				/** Loop for checking if any errors where stored */
				foreach($errors_check as $image_number => $error_check) {

					/** 
					 * Counter variable to help 'navigation' inside the 
					 * multidimensional array of errrors, and access 
					 * those errors recursively.
					 *
					 */
					$counter = 0;

					/** A 'container' variable to store errors in a simpler array */
					$bucket = NULL;

					/** Loop for extracting errors  */
					foreach($error_check as $value) {

						/** If the specific key/pointer of errors is empty, 'jump' to the next */
					    if( empty($value) ){
					        $counter++;
						}else{
							/** If there is an error inside that key/pointer, sum up 1 to the $bucket */
							$bucket += 1;
						}
					}

					/** 
					 * Checking if there is any number stored in $bucket 
					 * If there is an error, it returns the key/pointer 
					 * (image number) where that error was found. Do not 
					 * forget that we are still operating inside a loop.
					 *
					 */
					if( !empty($bucket)){
						$errors_string .=  "ERROR uploading image " . ( $image_number + 1 ) . ": ";
					}
					
					foreach($error_check as $value){
						/** Having errors, now we can concat the error to the string of errors  */
						if( !empty($value) ) {
							$errors_string .=  $value . " ";
						}
					}
				}

				/** Uploading all images if none of the had errors  */
				if ( $errors_string === NULL ) {
					
					for( $i = 0; $i < $total_images; $i++ ){
						/** Altering the name for each file  */
						$original_name = explode(".", $_FILES["images"]["name"][$i]);
						$modified_name = uniqid() . '.' . end($original_name);

						/** Uploading each file */
						move_uploaded_file( $_FILES["images"]["tmp_name"][$i], $uploads_path . $modified_name );
					}

				}else{
					$result_message_images = $errors_string . ' TRY AGAIN.';
				}
			}else{
				$result_message_images = 'No files selected.';
			}
		}

		/** Uploading a PDF document */
		if( isset($_POST['submit_pdf']) ) {
			if( isset($_FILES['pdf']) && $_FILES['pdf']['size'] != 0 ) {

				$error_check = [];

				/** Checking lenght of the name, 80 chars allowed */
				if( strlen($_FILES['pdf']['name']) > 80 ){
					$error_check[] = 'Filename is too long.';
				}

				/** Checking type of file */
				$allowed_types = array( 'application/pdf' );
				$detected_type = mime_content_type($_FILES['pdf']['tmp_name']);
				if( !in_array( $detected_type, $allowed_types ) ){
					$error_check[] = 'Not allowed document format.';
				}

				/** Checking that file has only one suffix, no more: file.php.pdf ... */
				if( substr_count($_FILES['pdf']['name'], '.') > 1 ) {
					$error_check[] = 'Not supported file format.';
				}

				/** Checking for other PHP error codes */
				if( $_FILES['pdf']['error'] ) {
					$error_check[] = 'Error code ' . $_FILES['pdf']['error'] . '.';
				}

				/** Creating a random-unique new name */
				$original_name = explode(".", $_FILES["pdf"]["name"]);
				$modified_name = uniqid() . '.' . end($original_name);
				
				/** If no errors, and file is checked for upload, then uploading the file, otherwise -> ERROR */
				if( empty($error_check) && is_uploaded_file($_FILES['pdf']['tmp_name']) ){
					move_uploaded_file( $_FILES["pdf"]["tmp_name"], $uploads_path . $modified_name );
				}else{
					$result_message_pdf = 'ERROR: ' . implode(' ', $error_check) . ' TRY AGAIN.';
				}
			}else{
				$result_message_pdf = 'No files selected.';
			}
		}

		/** Uploading a VIDEO */
		if( isset($_POST['submit_video']) ) {

			if( isset($_FILES['video']) && $_FILES['video']['size'] != 0 ) {

				$error_check = [];
				
				/** Checking lenght of the name, 80 chars allowed */
				if( strlen($_FILES['video']['name']) > 80 ){
					$error_check[] = 'Filename is too long.';
				}

				/** Checking type of file */
				$allowed_types = array( 'video/mp4', 'video/mov', 'video/webm', 'video/avi' );
				$detected_type = mime_content_type($_FILES['video']['tmp_name']);
				if( !in_array( $detected_type, $allowed_types ) ){
					$error_check[] = 'Not allowed document format.';
				}

				/** Checking that file has only one suffix, no more: file.php.mp4 ... */
				if( substr_count($_FILES['video']['name'], '.') > 1 ) {
					$error_check[] = 'Not supported file format.';
				}

				/** Checking for other PHP error codes */
				if( $_FILES['video']['error'] ) {
					$error_check[] = 'Error code ' . $_FILES['video']['error'] . '.';
				}

				/** Creating a random-unique new name */
				$original_name = explode(".", $_FILES["video"]["name"]);
				$modified_name = uniqid() . '.' . end($original_name);

				/** If no errors, and file is checked for upload, then uploading the file, otherwise -> ERROR */
				if( empty($error_check) && is_uploaded_file($_FILES['video']['tmp_name']) ){
					move_uploaded_file( $_FILES["video"]["tmp_name"], $uploads_path . $modified_name );
				}else{
					$result_message_video = 'ERROR: ' . implode(' ', $error_check) . ' TRY AGAIN.';
				}
			}else{
				$result_message_video = 'No file selected.';
			}
		}

		/** Scanning the uploads folder to build up a table to display and delete files */
		$array_uploaded_files = scandir($uploads_path);

		/** Removing . and .. from scandir array */
		unset($array_uploaded_files[0]);
		unset($array_uploaded_files[1]);

		/** Creating a table to display files and delete them by id */
		$files_table = "
			<table class='table table-bordered'>
				<thead>
					<tr>
						<th>Filename</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
		";
		foreach ($array_uploaded_files as $value) {
			$files_table .= "
					<tr><td>
					<a href='" . DOMAIN . "/uploads/" . $value . "'>" . $value . "</a>
					</td><td>
					<a href='" . DOMAIN . "/examples/files?remove_filename=" . $value . "'>Delete</a>
					</td></tr>";
		}
		$files_table .= "
				</tbody>
			</table>
		";

		/** Catching through URL when a file id has been set, then removing it with unlink()! */
		if( isset($_GET['remove_filename']) && !empty($_GET['remove_filename'])) {
			$file_location = ROOT . 'public_html/uploads/' . $_GET['remove_filename'];
			unlink($file_location);
			header("Location: " . DOMAIN . '/examples/files');
		}

		/** Setting up 'files.php' as view and storing variables for later use in view */
		$loader = new retriever( 'view_type' );	
		$loader->include_file( 'files.php' );
		$loader->include_data([ 
			'current_file' => $loader->file,	
			'files_action' => DOMAIN . '/examples/files',
			'result_message_memory' => $result_message_memory,
			'result_message_image' => $result_message_image,
			'result_message_images' => $result_message_images,
			'result_message_pdf' => $result_message_pdf,
			'result_message_video' => $result_message_video,
			'files_table' => $files_table
			]);

		/** Rendering view */
		$loader->render_view();
    }

    /** Method to set and unset $_SESSION variables */
    public function session()
    {
    	session_start();
    	/** Checking if the user has sent via URL the command to store a session variable */
    	if( isset($_GET['session']) && $_GET['session'] == 1 ){
    		$_SESSION['data'] = "<p><b>Hey! I'm a stored session variable!</b></p>";
    	}
    	/** Checking if the user has sent via URL the command to unset the session variable */
    	if( isset($_GET['session']) && $_GET['session'] == 0 ){
    		unset($_SESSION['data']);
    	}

    	/** Loading a view 'session.php' */
		$loader = new retriever( 'view_type' );	
		$loader->include_file( 'session.php' );

		/** Assigning $_SESSION to a variable if it is set */
		if ( isset($_SESSION['data']) ){
    		$session = $_SESSION['data'];
    	}else{
    		$session = '';
    	}

    	/** Adding data to view and rendering it */
		$loader->include_data([ 
			'session_action' => DOMAIN . '/examples/session',
			'current_file' => $loader->file,
			'session_data' => $session
			]);
		$loader->render_view();
    }

    /** Method assign data to a view 'cookie.php' and render it */
    public function cookie()
    {
	session_start();
    	/** Assigning $_COOKIE to a varaible if it is set */
		if( isset($_COOKIE['data']) ){
			$cookie = $_COOKIE['data'];
		} else {
			$cookie =  "<p>No data saved as cookie.</p>";
		}

		/** Creating a loader for a view file 'cookie.php' */
		$loader = new retriever( 'view_type' );	
		$loader->include_file( 'cookie.php' );

		/** Assigning data to the view and rendering it */
		$loader->include_data([ 
			'set_cookie' => DOMAIN . '/examples/set_cookie',
			'remove_cookie' => DOMAIN . '/examples/remove_cookie',
			'current_file' => $loader->file,
			'cookie_data' => $cookie
			]);
		$loader->render_view();
    }

    /** Operations to set a cookie */
    public function set_cookie()
    {
	session_start();
    	/** Creating the string that will be stored in $_COOKIE */
    	$cookie_value = "<p><b>Hey! I'm a stored cookie variable!</b></p>";

		/** 
		 * Setting up $_COOKIE. Values for cookies:
		 * 
		 * 1.- name: Required. Specifies the name of the cookie.
		 * 
		 * 2.- value: Optional. Specifies the value.
		 * 
		 * 3.- expire: Optional. Specifies when the cookie 
		 *     expires. The value: time()+86400*30, will set 
		 *     the cookie to expire in 30 days. If this 
		 *     parameter is omitted or set to 0, the cookie will 
		 *     expire at the end of the session (when the 
		 *     browser closes). Default is 0.
		 * 
		 * 4.- path: Optional. Specifies the server path of the 
		 *     cookie. If set to "/", the cookie will be
		 *     available within the entire domain. If set to 
		 *     "/php/", the cookie will only be available within 
		 *     the php directory and all sub-directories of php. 
		 *     The default value is the current directory that 
		 *     the cookie is being set in.
		 *  
		 * 5.- domain: Optional. Specifies the domain name of the 
		 *     cookie. To make the cookie available on all subdomains
		 *     of example.com, set domain to "example.com". Setting it 
		 *     to www.example.com will make the cookie only available 
		 *     in the subdomain.
		 * 
		 * 6.- secure: Optional. Specifies whether or not the cookie 
		 *     should only be transmitted over a secure HTTPS connection. 
		 *     TRUE indicates that the cookie will only be set if a 
		 *     secure connection exists. Default is FALSE.
		 * 
		 * 7.- httponly: Optional. If set to TRUE the cookie will be 
		 *     accessible only through the HTTP protocol (the cookie will 
		 *     not be accessible by scripting languages). This setting can 
		 *     help to reduce identity theft through XSS attacks. Default is FALSE.
		 * 
		 * 8.- samesite: value STRICT. Cookies will only be sent in a first-party 
		 *     context and not be sent along with requests initiated by 
		 *     third party websites.
		 *
		 */
		setcookie( 'data', $cookie_value, [
		    'expires' => ( time() + (60*60*24*365) ),
		    'path' => '/examples/cookie',
		    'domain' => false,
		    'secure' => false,
		    'httponly' => true,
		    'samesite' => 'Strict',
		]);

		/** Redirects to cookie when everything is finished */
		header("Location: " . DOMAIN . "/examples/cookie");
    }

    /** Operations to unset a cookie */
    public function remove_cookie()
    {
	session_start();
    	/** Creating the string that will be stored in $_COOKIE */
    	$cookie_value = "";
	    
		setcookie( 'data', $cookie_value, [
		    'expires' => ( time() - (60*60*24*365) ),
		    'path' => '/examples/cookie',
		    'domain' => false,
		    'secure' => false,
		    'httponly' => true,
		    'samesite' => 'Strict',
		]);
		header("Location: " . DOMAIN . "/examples/cookie");
    }

    /** Method to create a new record in database */
	public function create()
	{
		/** Instantiating the retriever object to load and also instantiate a the MODEL. */
		$loader = new retriever( 'model_type' );
		$loader->include_file( 'examples_model.php' );
		$db_action = $loader->load_model();

		/** Getting data from form and sending it to model to CREATE a new entry. */
		if( isset($_POST['title']) && isset($_POST['description'])  ){
			if( !empty($_POST['title']) && !empty($_POST['description'])  ) {
				$title = $_POST['title'];
				$description = $_POST['description'];
				$db_action->create( $title, $description );
				header('Location: ' . DOMAIN . '/examples/read');
			}else{
				header('Location: ' . DOMAIN . '/examples/read');
			}
		}else{
			header('Location: ' . DOMAIN . '/examples/read');
		}
	}
	
	/** Method to read records from database and render a view 'database.php' */
	public function read()
	{   
		/** Instantiating the retriever object to load and also instantiate a the MODEL. */
		$loader = new retriever( 'model_type' );
		$loader->include_file( 'examples_model.php' );
		$db_action = $loader->load_model();

		/** CREATE Part: The form for CREATING each entry, is static and its placed in the view! */
		$create_action =  DOMAIN . '/examples/create';

		/** READ Part: Creating the forms with each entry, for the READ section. */
		$read_section = NULL;
		$fetched_array = $db_action->read();
		foreach( $fetched_array as $value) {
			$read_section .= "
				<b>" . $value['title'] . "</b>
				<p>" . $value['description'] . "</p>
			";
		}
		if( $read_section == NULL ) {
			$read_section = "<p>No data to read yet.</p>";
		}

		/** UPDATE Part: Creating forms with each entry, for the UPDATE section. */
		$update_forms = NULL;
		$fetched_array = $db_action->read();
		foreach( $fetched_array as $value) {
			$update_forms .= "
				<form method='POST' action='" . DOMAIN . "/examples/update'>
					<input name='id' type='text' value='" . $value['id'] . "' hidden='true'>
					<p><label for='title'>Update title:</label></p>
					<p><input name='title' type='text' value='" . $value['title'] . "'></p>
					<p><label for='description'>Update description:</label></p>
					<p><textarea name='description'>" . $value['description'] . "</textarea></p>
					<p><input name='submit' type='submit' value='Update'></p>
				</form>
			";
		}
		if( $update_forms == NULL ) {
			$update_forms = "<p>No data to update yet.</p>";
		}

		/** DELTE Part: Creating forms with each entry, for the DELETE section. */
		$delete_forms = NULL;
		$fetched_array = $db_action->read();
		foreach( $fetched_array as $value) {
			$delete_forms .= "
				<form method='POST' action='" . DOMAIN . "/examples/delete'>
					<input name='id' type='text' value='" . $value['id'] . "' hidden='true'>
					<b>" . $value['title'] . "</b>
					<p>" . $value['description'] . "</p>
					<p><input name='submit' type='submit' value='Delete'></p>
				</form>
			";
		}
		if( $delete_forms == NULL ) {
			$delete_forms = "<p>No data to delete yet.</p>";
		}

		/** Instantiating the retriever in a new object to load a new VIEW. */
		$loader = new retriever( 'view_type' );
		$loader->include_file( 'database.php' );

		/** Accesing the file attribute of retriever in order to show it in view. */
		$current_file = $loader->file;

		/** 'Loading' data in VIEW and rendering it! */
		$loader->include_data([ 
			'current_file'  => $current_file,
			'create_action' => $create_action,
			'read_section'  => $read_section,
			'update_forms'  => $update_forms,
			'delete_forms'  => $delete_forms
			]);
		$loader->render_view();
	}

	/** Method update a record in database */
	public function update()
	{
		/** Instantiating the retriever to load and also instantiate a the MODEL. */
		$loader = new retriever( 'model_type' );
		$loader->include_file( 'examples_model.php' );
		$db_action = $loader->load_model();

		/** Getting data from form and sending it to the model to CREATE a new entry. */
		if( isset($_POST['id']) && isset($_POST['title']) && isset($_POST['description'])  ){
			if( !empty($_POST['id']) && !empty($_POST['title']) && !empty($_POST['description'])  ) {
				$id = $_POST['id'];
				$title = $_POST['title'];
				$description = $_POST['description'];
				$db_action->update( $id, $title, $description );
				header('Location: ' . DOMAIN . '/examples/read');
			}
		}else{
			header('Location: ' . DOMAIN . '/examples/read');
		}
	}

	/** Method to delete a record in database */
	public function delete()
	{
		/** Instantiating the retriever to load and also instantiate a the MODEL. */
		$loader = new retriever( 'model_type' );
		$loader->include_file( 'examples_model.php' );
		$db_action = $loader->load_model();

		/** Getting data from forms and sending it to model to DELETE selected entry. */
		if( isset($_POST['id']) ){
			if( !empty($_POST['id']) ) {
				$id = $_POST['id'];
				$db_action->delete( $id );
				header('Location: ' . DOMAIN . '/examples/read');
			}
		}else{
			header('Location: ' . DOMAIN . '/examples/read');
		}
	}
}

?>
