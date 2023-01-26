<?php

$sqlQuery=$dbConn->query("SELECT * FROM `books`");

// Tabellenkopf ausgeben
$columnCount =$sqlQuery->columnCount();
for ( $c = 0; $c < $columnCount; $c++ ) {
    // array mit Spaltenmetadaten
    $columnMeta = $sqlQuery->getColumnMeta($c);
    // Aus Spaltenmetadaten Name auslesen
    $columnName = $columnMeta['name'];
}; 


// () gets false if $row == null
while( $row = $sqlQuery->fetch(PDO::FETCH_ASSOC) ) {

  // echo "<tr>";

  /* foreach ($title as $columTitle => $title) {

 

    echo "<th>$title</th>";
  
  } */

  


   foreach ($row as $columName => $value);

};
  
?>