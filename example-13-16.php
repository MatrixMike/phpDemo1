<html>
<head>
  <meta http-equiv="Content-Type" 
      content="text/html; charset=iso-8859-1">
  <title>Test 3</title>
</head>
<body bgcolor="#f800f8">
  <h1>
<?php
$a = gmp_mul(35, gmp_pow(10,405));
$b = gmp_mul(28, gmp_pow(10,405));

print gmp_strval($a);
echo "$a";
print gmp_strval($b);
print "xx";
$a_squared = gmp_pow($a, 2);
$b_squared = gmp_pow($b, 2);
print "yy";
print gmp_strval($a_squared);

$hypotenuse = gmp_sqrt(gmp_add($a_squared, $b_squared));

print gmp_strval($hypotenuse);
  ?>
</body>
</html>
