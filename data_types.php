<?php
/**
 * Created by Moshiur.
 * Date: 9/17/2018
 * Time: 5:39 PM
 */

$text = "This is String text";
$x = 300;
$y = 22.33;
$bool =  true;
$arr = array(7,10,12,15);

//Object
class College{
    public function enjoyClass(){
        return "I am enjoying my classes in college";
    }
    public function enjoyBrief(){
      echo $this->enjoyClass();
    }
}
 $clg = new College();

//Null
$z = null;

?>


<html>
<head>
    <title>Php Data Types</title>

    <p>String : <?php echo $text; ?></p>
    <p> Integer: <?php echo var_dump($x); ?></p>
    <p> Float: <?php echo var_dump($y);  ?></p>
    <p> Boolean: <?php echo var_dump($bool); ?></p>
    <p> Array: <?php echo var_dump($arr); ?></p>
    <p> Object: <?php $clg->enjoyBrief(); ?></p>
    <p> Null: <?php echo $z; ?></p>
</head>
<body>

</body>
</html>
