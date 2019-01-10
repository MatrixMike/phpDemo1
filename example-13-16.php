<html>
<head>
  <meta http-equiv="Content-Type" 
      content="text/html; charset=iso-8859-1">
  <title>Test 3</title>
</head>
<body bgcolor="#f800f8">
  <h1>
	  
<?php
$mul = gmp_mul("12345678", "2000");
echo gmp_strval($mul) . "\n";
?>
<?php echo "<br>1 "; ?>

<?php
echo gmp_strval(gmp_pow(4,4)); //This would give the answer as 256
?>
<?php echo "<br>2 "; ?>
<?php
$a = gmp_mul(45, 45);
$b = gmp_mul(28, 28);

print gmp_strval($a);
?>
<?php echo "<br>3 "; ?>
<?php  
echo "$a";
print gmp_strval($b);
print "xx";
$a_squared = gmp_pow($a, 2);
$b_squared = gmp_pow($b, 2);
print "yy";?>
<?php echo "<br>4 "; ?>
<?php print gmp_strval($a_squared);
  ?>
<?php $hypotenuse = gmp_sqrt(gmp_add($a_squared, $b_squared));  ?>
<?php echo "<br>5 "; ?>
<?php $hypotenuse = gmp_sqrt(gmp_add($a, $b));  ?>
<?php echo "<br>6 "; ?>
<?php print gmp_strval($hypotenuse);
  ?>
</body>
</html>
