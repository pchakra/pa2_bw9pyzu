<?php
require_once '../database.php';

function pics_of_album($id){
    if($id){
    $query = "SELECT * FROM Contain inner join Photo on Contain.picid = Photo.picid WHERE albumid = '" . $id . "' ORDER BY Contain.sequencenum";
    $results = query($query);
    return $results;
    }
}

function deletePic($albumid, $picid){
    if(exists("Contain", "WHERE albumid = '$albumid' and picid = '$picid'")){
     deleteRow("Contain", "WHERE albumid = '$albumid' and picid = '$picid'");
    }
    
    if(exists("Photo", "WHERE picid = '$picid'")){
     deleteRow("Photo", "WHERE picid = '$picid'");
     updateAlbum($albumid);
    }
    
    return TRUE;
}

function addPic($albumid, $type, $name){
    
    if($albumid and $type){
        if(exists("Album", "WHERE albumid = '$albumid'")){
        $photo['picid'] =$name;
        $photo['url'] = "/pictures/" . $name . "." . $type;
        $photo['format'] = $type;
        $query = "select max(sequencenum) from Contain where albumid = " . $albumid;
        $result = query($query);
        $sequence = $result[0]['max(sequencenum)'];
        $contain['sequencenum'] = $sequence+1;
        $contain['picid'] = $name;
        $contain['albumid'] = $albumid;
        //$contain['caption'] = $name;
        insert("Photo", $photo);
        insert("Contain", $contain);
        updateAlbum($albumid);
        }
        
    }
    return TRUE;
}
//You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') )' at line 1Cannot add or update a child row: a foreign key constraint fails (`485`.`Contain`, CONSTRAINT `Contain_ibfk_2` FOREIGN KEY (`picid`) REFERENCES `Photo` (`picid`))
?>
