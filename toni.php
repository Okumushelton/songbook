<html>
<head>
<title>Connecting MySQL Server</title>
</head>
<body>
<?php

//echo 'We are trying to connect to MySQL';
if(isset($_POST['add']))
{
	$dbhost = 'localhost:3306';
	$dbuser = 'root';
	$dbpass = '@gmail.com1';
	$db = 'TONI';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);

	if(! $conn )
	{
		die('Could not connect: ' . mysql_error());
	}

	if(! get_magic_quotes_gpc() )
	{
		$name = addslashes($_POST['name']);
		$name = addslashes($_POST['website']);
		$email = addslashes($_POST['email']);
		$message = addslashes($_POST['message']);

	}else{
		
		$name = $_POST['name'];
		$name = $_POST['website'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		
	}
	
	$sql = "INSERT INTO contucts ".
		"(name, website, email,message) ".
		"VALUES ".
		"('$name', 'website','$email','message')";

	$retrieve_sql = 'SELECT name, website, email,email
		FROM contucts';

		
	


	$db_name = "TONI";

	$db_selected = mysql_select_db( $db_name, $conn );
	
	if(!$db_selected){
		echo "Database not selected";
	}

	$insert_subscriber = mysql_query( $sql, $conn );
	$retrieve_data = mysql_query( $retrieve_sql, $conn );
	
	while($row = mysql_fetch_array($retrieve_data, MYSQL_ASSOC))
	{
		echo "Name :{$row['name']}
		<br> ".
		"Email: {$row['email']} <br> 
		<br> ".
		"Message: {$row['message']} <br> 
		<br> ".
		"--------------------------------------------------<br>";
		}
	
	if($insert_subscriber){
		//echo "Subscriber added successfully";
	}
	
	

}
?>
<form   class="form-horizontal">
					<div class="form-group">
						<label for="user-name" class="col-sm-2 control-label">Name:-</label>
						<div class="col-sm-8">
						  <input name="name"type="text" class="form-control" id="user-name" placeholder="Enter Your Name">
						</div>
					</div>
					<div class="form-group">
						<label for="user-url" class="col-sm-2 control-label">Website:-</label>
						<div class="col-sm-8">
						  <input name="website" type="text" class="form-control" id="user-website" placeholder="Enter Your Website">
						</div>
					</div>
					<div class="form-group">
						<label for="user-email" class="col-sm-2 control-label">Email:-</label>
						<div class="col-sm-8">
						  <input name="email" type="text" class="form-control" id="user-email" placeholder="Enter Your Email">
						</div>
					</div>
					<div class="form-group">
						<label for="user-message" class="col-sm-2 control-label">Message:-</label>
						<div class="col-sm-8">
						  <textarea name="message" id="user-message" class="form-control" cols="20" rows="5" placeholder="ENter Your Message"></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-8 col-sm-offset-2">
							<a href="" type="submit" class="btn btn-warning">SUBMIT</a>
						</div>
					</div>
				</form>



<?php

mysql_close($conn);
?>
</body>
</html>