<?php

$sqlQuery=$dbConn->query("SELECT * FROM `books`");

// Tabellenkopf ausgeben
$columnCount =$sqlQuery->columnCount();
for ( $c = 0; $c < $columnCount; $c++ ) {
    // array mit Spaltenmetadaten
    $columnMeta = $sqlQuery->getColumnMeta($c);
    // Aus Spaltenmetadaten Name auslesen
    $columnName = $columnMeta['name'];
    echo "<th> $columnName</th>";
};


?>