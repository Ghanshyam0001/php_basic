<?php

error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uplode</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="uplodefile"><br><br>
        <input type="submit" name="submit" value="uplode file"><br><br>

    </form>
    
</body>
</html>

<?php

$filename =  $_FILES["uplodefile"]["name"];
$tempname =  $_FILES["uplodefile"]["tmp_name"];
if(isset($_FILES)){
    move_uploaded_file($tempname,"images/".$filename);

}
else{
    echo "not uploded";
}




echo "<pre>";
print_r ($_FILES["uplodefile"]);
echo "</pre>";


?>