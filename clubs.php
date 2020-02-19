<!DOCTYPE html>
<html lang="en">
<head>
</head>


<body>

<?php


$servername = "172.31.22.43"; 
$username = "Emilie200439052"; 
$password = "YbLpj12vzs"; 

$db = new PDO('mysql:host=172.31.22.43;dbname=Emilie200439052','Emilie200439052', 'YbLpj12vzs');
    $sql = "SELECT * FROM clubs where clubId = $clubId";

//build lab2.php that displays an HTML table 

$sql = "SELECT * FROM clubs";
$cmd = $db->prepare($sql);
$cmd->execute();
$teams = $cmd->fetchAll();

//initialize variables
if (!empty($_GET['clubId'])){

    $clubId= $_GET['clubId'];

    $db = new PDO('mysql:host=172.31.22.43;dbname=Emilie200439052','Emilie200439052', 'YbLpj12vzs');
    $sql = "SELECT * FROM clubs where clubId = $clubId";
   
foreach ($clubNamw as $VALUES){
 //The table should have 2 columns
 echo '<tr><td>'. $VALUES['clubName']. 
 '</td><td>'. $VALUES['ground'].'</td><td>'.
 '</td>
 
 
 <td><a class="text-danger" href= "deleteclub.php?clubId=' .$VALUE['clubId']. '"
onclick-"return confirmDelete();">Delete</a></td>
</tr>'


}
 //Test the page on Xammp
$db = null;
?>

<form method="post" action="clubs.php">
    <table>
        <tr>
            <th>Club Name</th>
            <th>Groups</th>
            
        </tr>

        <script  src="script.js" type="text/script"></script>
</body>

