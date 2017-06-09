<?php
echo 'Username :' .$_POST["username"]. '<br>'.'Password :'. $_POST["password"]. '<br>';

if(($_POST["username"]==="S") && ($_POST["password"]==="l"))
{
	echo"username and password is correct";
}
else
{
	echo"username and password is not correct";
}

?>
