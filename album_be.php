<?php
require_once 'database.php';

function getPictures($albumid){
    $query = "SELECT Contain.caption,Photo.format,Photo.picid, Photo.url FROM Contain inner join Photo on Photo.picid = Contain.picid WHERE albumid = ".$albumid . " ORDER by sequencenum";
    $results = query($query);
    return $results;
}

?>
