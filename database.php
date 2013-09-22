<?php

$connect = mysql_connect("localhost","group8","helloDB");

 if(!$connect)
    die('Connection Failed: ' . mysql_error());

 mysql_select_db("group8", $connect);
    
function query($query){
    $results = array();
    $result = mysql_query($query);
     while($row = mysql_fetch_array($result))
      {
        array_push($results, $row);
      }
      
      if (mysql_error()) 
         echo mysql_error();
      
      return $results;
}
function insert($table, $data){
    $columns = ""; $values = "";
    foreach($data as $key=>$value){
        $key = "`" . $key . "`";
        $columns = $columns . ", " . $key;
        $value = "'" . $value . "'";
        $values = $values . ", " . $value;
    }
    $columns = substr($columns,1);
    $values = substr($values, 1);
    if($table == 'Album'){
    $columns = $columns . " , `created` , `lastupdated` ";
    $values = $values . " , NOW() , NOW() ";
    }
    if($table == 'Photo'){
        $columns = $columns . " , `date` ";
        $values = $values . " , NOW()";
    }
    $insert = "INSERT INTO " . $table . " ( " . $columns . ") VALUES ( " . $values . " )";
    $result = mysql_query($insert);
    if(mysql_error()){
        echo mysql_error();
    }
    return mysql_insert_id();
}


function update($table, $updates, $where){
   
    foreach($updates as $key=>$update){
        $values = $values . ", " . "`" . $key . "` = '" . $update . "' ";
    }
    $values = substr($values, 1);
    $values = $values . ", `lastupdated` = NOW() ";
    $update = "UPDATE " . $table . " SET ". $values . $where;
    echo $update;
    $result = mysql_query($update);
    if(mysql_error()){
        echo mysql_error();
    }
}

function updateAlbum($albumid){
    $values = "`lastupdated` = NOW() ";
    $update = "UPDATE Album SET ". $values . "WHERE albumid = '$albumid'";
    mysql_query($update);
    if(mysql_error()){
        echo mysql_error();
    }
}


function deleteRow($table, $where){
    $delete = "DELETE FROM " . $table . " " .$where;
    $result = mysql_query($delete);
    if(mysql_error()){
        echo mysql_error();
    }
    return $result;
}

function singleQuery($query){
    $result = mysql_query($query);
    if(mysql_error()){
        echo mysql_error();
    }
    return $result;
}

function exists($table, $where){
    $query = "SELECT * from " . $table. " " . $where;
    $results = query($query);
    if($results)
        return TRUE;
    else
        return FALSE;
    
}
?>
