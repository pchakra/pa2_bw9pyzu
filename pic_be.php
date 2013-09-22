<?php

require_once 'database.php';
function getPicture($id){
$query = "SELECT Contain.caption, Photo.format, Contain.picid, Photo.url from Photo INNER JOIN Contain on Contain.picid = Photo.picid where Photo.picid = '" . $id . "'";
$results = query($query);
return $results;
}
getOther('pic1');
function getOther($id){
    
    $query = "SELECT Contain.picid, Contain.caption, Photo.format, Photo.url from Contain inner join Photo on Contain.picid = Photo.picid where albumid = (select albumid from Contain where picid = '" . $id . "') order by Contain.sequencenum";
    $results = query($query);
    $ids = array();
    $length = sizeof($results);
    foreach($results as $result){
        array_push($ids, $result['picid']);
    }
    $key = array_search($id, $ids);
    if($key == 0)
        $final['prev'] = null;
    else {
        $prev = $key-1;
        $temp = $results[$prev];
        $final['prev'] = $temp['picid'];
    }
    
    if($key == ($length-1))
        $final['next'] = null;
    else {
        $next = $key+1;
        $temp = $results[$next];
        $final['next'] = $temp['picid'];
    }
    return $final;
    
}
?>
