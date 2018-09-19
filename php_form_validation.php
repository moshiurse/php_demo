<?php
/**
 * Created by Moshiur.
 * Date: 9/19/2018
 * Time: 2:39 AM
 */

$name = $email = $website = $comment = $gender = "";
$errname = $erremail = $errwebsite = $errcomment = $errgender = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    if (empty($_POST['name'])){
        $errname = "Name Required";
    }else {
        $name = validate($_POST['name']);
    }

    if (empty($_POST['email'])){
        $erremail = "email Required";
    }elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $erremail = "Invalid email Format";
    }else {
        $email = validate($_POST['email']);

    }

    if (empty($_POST['website'])){
        $errwebsite = "Website Required";
    }elseif(!filter_var($_POST['website'], FILTER_VALIDATE_URL)){
        $errwebsite = "Invalid website Format";
    }else {
        $website = validate($_POST['website']);
    }

    if (empty($_POST['gender'])){
        $errgender = "Gender Required";
    }else {
        $gender = validate($_POST['gender']);
    }
    $comment = validate($_POST['comment']);

//    echo "Name : " . $name . "<br>";
//    echo "Email : " . $email . "<br>";
//    echo "Website : " . $website . "<br>";
//    echo "Comment : " . $comment . "<br>";
//    echo "Gender : " . $gender . "<br>";

}

function validate($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}


?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<table>
    <tr>
        <td>Name : </td>
        <td><input type="text" name="name">* <?php echo $errname; ?> </td>
    </tr>
    <tr>
        <td>Email : </td>
        <td><input type="text" name="email">* <?php echo $erremail; ?></td>
    </tr>
    <tr>
        <td>Website : </td>
        <td><input type="text" name="website">* <?php echo $errwebsite; ?></td>
    </tr>

    <tr>
        <td>Comment : </td>
        <td><textarea name="comment" rows="5" cols="50"></textarea></td>
    </tr>
    <tr>
        <td>Gender : </td>
        <td>
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female
            * <?php echo $errgender; ?>
        </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Submit" name="submit"></td>
    </tr>
</table>
</form>

<?php


?>