<?php 
    $disk_list = file_get_contents(__DIR__ . "/../db/database.json");

    header ("Content-Type: application/json");
    echo $disk_list;

?>