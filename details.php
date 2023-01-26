<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="scripts/js/main.js"></script>
</head>
<body>

<?php
include ".scripts/php_includes/connector.php";

// 

if (isset($_GET['id'])) {
$id=$_GET['id'];
}
else {
    exit("No id found!");
}

$sqlQuery=$dbConn->query("SELECT `title` , `author` , `genre` , `description` , `publisher` , `price` , `currency` , `in_stock` , `ISBN` FROM `books` WHERE `id` = $id");
$row = $sqlQuery->fetch(PDO::FETCH_ASSOC);



?>



<div class="container">
        <div class="row">
            <h2>Details</h2>
            <table class="table table-hover">
                <!-- Tabellenkopf-->
                <thead>
                    <tr>
                    <th class="w-33 p-3">
                    <?php echo($row['ISBN']);
                    ?>
</th> 
<th>
<?php echo($row['title']); ?> / <?php echo($row['author']); ?>
</th> 
                    </tr>
                </thead>
 
                <tbody>
                    
                // Generate td

<?php foreach ($row as $columnName => $value) {
    $nColumnName = nColumnName($columnName);
    echo "<tr>
    <td class=''>
    $nColumnName
</td>
<td class=''>
        $value
</td>";

};
        ?>
                </tbody>
            </table>
 
            <a class="btn btn-info btn-sm" href="javascript:history.back()" role="button">Back</a>
        </div>
    </div>
    
</body>

</html>