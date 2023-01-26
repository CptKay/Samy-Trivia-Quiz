<?php
$dbHost = getEnv('DB_HOST');
$dbName = getEnv('DB_NAME');
$dbUser = getEnv('DB_USER');
$dbPassword = getEnv('DB_PASSWORD');

try {
  $dbConn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
  // set the PDO error mode to exception
  $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


// Aliases
define ("NAME_MAP",
$nameMap = array(
  "title" => "Title" ,
  "author" => "Author" ,
  "genre" => "Genre" ,
  "description" => "Description" ,
  "publisher" => "Publisher" ,
  "price" => "Price" ,
  "currency" => "Currency",
  "in_stock" => "Available" ,
  "id" => "ID" ,
  "used" => "Used" ,
  "modification_date" => "Date of modification" ,
  "modification_time" => "Time of modification" ,
  "ISBN" => "ISBN"
  

)

);

function nColumnName($columnName)
{
  return NAME_MAP[$columnName];

}
 // ucfirst "title" , "author" , "genre" , "description" , "publisher" , "price" , "currency" , "in_stock" , "ISBN"

?>