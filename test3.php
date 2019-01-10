<html>
<head>
  <meta http-equiv="Content-Type" 
      content="text/html; charset=iso-8859-1">
  <title>Test 3</title>
</head>
<body bgcolor="#f800f8">
  <h1>
<?php
  require_once 'Structures/Graph.php';
  require_once 'Structures/Graph/Node.php';
 
$nonDirectedGraph = new Structures_Graph(false);
 
$nodes_names = array('a', 'b', 'c' ,'d', 'e');
$nodes = array();
 
foreach($nodes_names as $node) {
    /* Create a new node / vertex */
    $nodes[$node] = new Structures_Graph_Node();
 
    /* Add the node to the Graph structure */
    $nonDirectedGraph ->addNode($nodes[$node]);
}
 
/**
  * Specify connections between different nodes.
  * For example in the following array, 'a-b'
  * specifies that node 'a' is connected to node 'b'.
  * Also refer to the figure above.
  */
 
$vertices = array('a-b', 'b-c', 'b-d', 'd-c', 'c-e', 'e-d');
 
foreach($vertices as $vertex) {
    $data = preg_split("/-/",$vertex);
    $nodes[$data[0]]->connectTo($nodes[$data[1]]);
}
  ?>
</body>
</html>
  
