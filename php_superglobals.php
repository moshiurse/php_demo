<?php
/**
 * Created by Moshiur.
 * Date: 9/19/2018
 * Time: 1:48 AM
 */

$x = 10;
$y = 20;

function globaltest (){
    $GLOBALS['z'] = $GLOBALS['x']+ $GLOBALS['y'];
}
globaltest();
echo $z;

echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];
?>


<form action="" method="post">
    <input type="text" name="name">
    <input type="submit" value="Submit">
</form>
    <a href="php_superglobals.php?msg=Hello&txt=World">Send Text</a>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_REQUEST['name'];

    if (empty($name)){
        echo "Empty not allowed!";
    }else {
        echo "Submitted: ". $name;
    }
}

$msg = $_GET['msg'];
$txt = $_GET['txt'];

echo $msg . " " . $txt;

?>