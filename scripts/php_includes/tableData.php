<?php

$sqlQuery=$dbConn->query("SELECT * FROM `books`");



// () gets false if $row == null
while( $row = $sqlQuery->fetch(PDO::FETCH_ASSOC) ) {

    echo "<tr>";

foreach ($row as $columName => $value) {
    if ($columName === 'title') {
        $id=$row['id'];

        echo "<td><a href='details.php?id=$id'>$value</a></td>";

    }

    else {

   echo "<td> $value</td>";

}
}
echo " </tr>";

};

?>