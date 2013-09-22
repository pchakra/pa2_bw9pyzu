<?php
require_once '../database.php';

function albums_of_user($username){

    $query = "SELECT * FROM Album WHERE username = '" . $username . "'";
    $results = query($query);
    return $results;
}

function deleteAlbum($id){
    if(exists("Contain", "WHERE albumid = $id"))
     deleteRow("Contain", "WHERE albumid = $id");
    if(exists("Album", "WHERE albumid = $id"))
     deleteRow("Album", "WHERE albumid = $id");
     return TRUE;
}

function addAlbum($username, $title){
    $insert['title'] = $title;
    $insert['username'] = $username;
    $result = insert("Album", $insert);
    return $result;
}
?>
