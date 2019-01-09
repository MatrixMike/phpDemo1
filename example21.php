<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
                      "http://www.w3.org/TR/html401/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" 
      content="text/html; charset=iso-8859-1">
  <title>Hello, world</title>
</head>
<body bgcolor="#f8f800">
  <h1>
  <?php
  $name = "World";
    print "Hello, $name 2 <br>";
  ?>
  The time is <?php echo date('H:i:s');?><br>
  The date is <?php echo date('j F Y');?><br>
  </h1>
  <?php
  $name1 = "One";
  $name2 = "Two";
  $name3 = "Tree";
  echo "<PRE>";
  printf("%10s \n",  $name1);
  printf("%10s \n",  $name2);
  printf("%10s \n",  $name3);
  printf("%10s \n",  "1234567890");  
  echo "</PRE>";
  ?>
</body>
</html>
