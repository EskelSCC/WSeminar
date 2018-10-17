<form method="post">
<input type="text" name="z1">
<input type="text" name="z2">
<input type="submit" name="rz">
</form>



<?php
$_zahl1 = $_POST["z1"];
$_zahl2 = $_POST["z2"];
$_rz = $_POST["rz"];



if (is_numeric($_POST["z1"]) && is_numeric($_POST["z2"]) && ($_POST["z2"] !=0 || !isset($_POST["/"]))) {

  if ($_rz == "+")    $c=bcadd($_zahl1, $_zahl2, 2);
  if ($_rz == "-")    $c=bcsub($_zahl1, $_zahl2, 2);
  if ($_rz == "*")    $c=bcmul($_zahl1, $_zahl2, 2);
  if ($_rz == "/")    $c=bcdiv($_zahl1, $_zahl2, 2);



echo $_POST["z1"];
echo $op;
echo $_POST["z2"];
echo " = ";
echo $res;
}else{
echo "Error, please check On-Error-Box";
}
?>

<hr>
<h3> On-Error-Box </h3>
<p># Check if both text fields are filled</p>
<p># Check if you divided by 0</p>
<p># Only enter numbers and '.'</p>
<p># Use '.' instead of ','</p>
