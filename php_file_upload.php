<?php
/**
 * Created by PhpStorm.
 * User: Legend Of Legends
 * Date: 9/19/2018
 * Time: 5:56 PM
 */

if (isset($_FILES['file'])){
    $filename = $_FILES['file']['name'];
    $filetmp = $_FILES['file']['tmp_name'];

    move_uploaded_file($filetmp, "img/" . $filename);
    echo "Image uploaded";
}

?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" name="submit" value="Submit">
</form>
