<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="scripts/js/main.js"></script>
</head>
<body>

<?php
include "./scripts/php_includes/connector.php";

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
            <form action="" method="post">
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
    echo "<tr>";
   echo "<td class=''>
    $nColumnName
</td>";

 switch ($columnName) {
    case "genre" :
        echo "<td class=''>
        <select class='form-control' name='$columnName' id='genre' value='$value'>
      <option>Fantasy</option>
      <option>Crime</option>
      <option>History</option>
      <option>Poetry</option>
      <option>Other</option>
    </select>
    
</td>";
        break;
        case "description" :
            echo "<td class=''>
            <textarea  class='form-control' name='$columnName' id='description' value='$value'>
            '$value'
            </textarea>
            </td>";
            break;
            case "currency" :
                echo "<td class=''>
                <input type='radio' class='form-check-input' name='$columnName' id='USD' value='$value'>
                <label class='form-check-label' for='USD'>
                USD
                </label>
                <input type='radio' class='form-check-input' name='$columnName' id='CHF' value='$value'>
                <label class='form-check-label' for='CHF'>
                CHF
                </label>
        </td>";

                break;
                case "in_stock" :
                    echo "<td class=''>
                <input type='checkbox' class='form-check-input' name='$columnName' id='in_stock' value='$value'>
                <label class='form-check-label' for='in_stock'>
                Yes
                </label>
                <input type='checkbox' class='form-check-input' name='$columnName' id='in_stock' value='$value'>
                <label class='form-check-label' for='in_stock'>
                No
                </label>
                
        </td>";
                    break;
        default:
        echo "<td class=''>
        <input type='text' class='form-control' name='$columnName' value='$value'>
</td>";
 }


echo "</tr>";

};
        ?>
                </tbody>
            </table>


</form>
<input class="btn btn-info" type="submit" value="Submit">           
<a class="btn btn-info btn-sm" href="javascript:history.back()" role="button">Back</a>
        </div>
    </div>
    
</body>

</html>