<?php
require_once 'database.php';

function users(){
    $query = "SELECT * FROM User";
    $results = query($query);
    return $results;
}

?>
