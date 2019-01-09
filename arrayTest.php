<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
                      "http://www.w3.org/TR/html401/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" 
      content="text/html; charset=iso-8859-1">
  <title>ArrayTest</title>
</head>
<body bgcolor="#f800f8">
  <h1>
  <?php
  $myarray1 = array(8,12,24);
  $myarray2 = array(7,3,6);

  echo $myarray1[2];
  echo "<PRE>";
  print_r($myarray1);
  echo "</PRE>";
  ?>
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
