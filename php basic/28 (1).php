<!-- filter_input -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="<?php echo $_SERVER["PHP_SELF"]; ?>" >
E-mail:  <input type="text" name="email" autocomplete="off">
<input type="submit" name="submit" value="submit">



</form>
<br>
<?php

if(isset($_REQUEST['submit'])){
    echo filter_input(INPUT_GET,"email",FILTER_VALIDATE_EMAIL);
    echo $_GET['email'];
}

?>
    
</body>
</html>