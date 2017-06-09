<!DOCTYPE html>
<head><title>PHP</title></head>
<body>
<!--<?php
echo "Hello PHP";

//$value = 25; // variables are initialised by a dollar ($) sign.
//$name = "Programming knowledge"; // Strings are enclosed in double quotes.




// echo is used to output the parameters passed to it.
// echo "$name"; shows Programming knowledge. or echo $name,$value;
// echo "25*8=$value"; or echo "25*4=",$value;
// . $name . ,,, concatination. echo 'Hello=' . $name .; 
// <form method="post" action="generateprescription.php"><big><big>PRESCRIPTION :<br> connect php with html.
?
-->

<?php 
$counter=1;

do
{
	echo 'Okumu Shelton' .$counter.'<br>';
	$counter++;
}
while ($counter<=10);

?>


<?php
for($count=1; $count<=10; $count++)
{
	echo 'okumu Shelton' .$count. '<br>';
}
?>
</body>
</html>
