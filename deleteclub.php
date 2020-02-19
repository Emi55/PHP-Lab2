<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>

<body>
    <?php


// connect to the database
$db = new PDO('mysql:host=172.31.22.43;dbname=Emilie200439052','Emilie200439052', 'YbLpj12vzs');


// set up SQL command to delete the selected record

$sql= "delete from clubs where clubId = :clubId";

// bind parameter to pass selected Id
$cmd = $db->prepare($sql)
$cmd->bindParam( parameter ':clubId', &variable:$clunId, data_type:PDO::PARAM_INT);

// execute rge SQL command
$cmd->execute();

// disconnect 
$db = null;
// Take the use back to main page
?>
</body>