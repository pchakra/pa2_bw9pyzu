<?php
require_once 'database.php';

function albums_of_user($username){

    $query = "SELECT * FROM Album WHERE username = '" . $username . "'";
    $results = query($query);
    return $results;
}

function getAlbums(){
    $query = "SELECT * FROM Album";
    $results = query($query);
    return $results;
}
?>
