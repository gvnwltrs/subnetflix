<?php
require_once("../includes/config.php"); 

if(isset($_POST["videoId"]) && isset($_POST["username"])) {
    $query = $connection->prepare("SELECT progress FROM videoProgress
                                    WHERE username=:username AND videoId=:videoId"); 
    $query->bindValue(":videoId", $_POST["videoId"]); 
    $query->bindValue(":username", $_POST["username"]); 
    $query->execute(); 

    echo $query->fetchColumn(); 
}
else {
    echo "No videoId or username passed into file"; 
}
?>