
<?php



/*
$file = "data.txt";
if(file_exists($file)){
	readfile($file);
	copy($file, "newfile.txt");
	copy($file, "newfiles.txt");
	rename("newfile.txt", "dox.txt");
	unlink("dox.txt");
	echo filesize($file);
}else{
	echo "file is missing";
}
echo "<br>";
print_r(dirname("$file"));
*/
?>


<!DOCTYPE html>
<html>
<head>
<title>Form page</title>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
Full name : <br>
<input type="text" name="fname"/><br><br>
Age : <br>
<input type="text" name="age"/><br><br>
Email : <br>
<input type="text" name="email" /><br><br>
<input type="file" name="photo"/><br><br>
<input type="submit" name="Submit"/><br><br>
</form>
<?php 
if(filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)){
	echo "Valid Email <br><br>";
	echo filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
	
}else{
	echo "Invalid Email";
}
echo "<br>";
if(filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT)){
	echo "<br> This is age type <br>
	";
	echo filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
}else{
	echo "<br> Invalid age";
}
    
?>
<br>
<?php
$to = "rakibc698@gmail.com";
$subject = "Test mail";
$message = "Hello Bangladesh";
$from = "rakibc69@gmail.com";
$headers = "From : $from";
mail($to, $subject, $message, $headers); 
echo "Mail Sent";
?>
</body>
</html>