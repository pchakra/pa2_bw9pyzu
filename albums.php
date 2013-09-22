<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="table.css">
  	<?php 
        include("./includes/header.php"); 
    ?>
  </head>
  <body>
    <h1 class="title-thin">/albums page here.</h1>
    <?php
        $username = $_GET['username'];
        if($username){
        require_once 'albums_be.php';
        $values = albums_of_user($username);
    ?>
    <table class="table" style="left:25em">
        <tr class="row">
            <th class ="header">Album ID</th>
            <th class ="header">Title</th>
            <th class ="header">Created</th>
            <th class ="header">Last Updated</th>
        </tr>  
    
    <?php
    foreach($values as $value){
    ?>
        <tr class="row">
            <td><?php echo $value['albumid']; ?></td>
            <td><?php echo $value['title']; ?></td>
            <td><?php echo $value['created']; ?></td>
            <td><?php echo $value['lastupdated']; ?></td>
        </tr>
    <?php } 
        }
        else{
            require_once 'albums_be.php';
        $values = getAlbums();
    ?>
    <table class="table" style="left:25em">
        <tr class="row">
            <th class ="header">Album ID</th>
            <th class ="header">Title</th>
            <th class ="header">Created</th>
            <th class ="header">Last Updated</th>
        </tr>  
    
    <?php
    foreach($values as $value){
    ?>
        <tr class="row">
            <td><?php echo $value['albumid']; ?></td>
            <td><?php echo $value['title']; ?></td>
            <td><?php echo $value['created']; ?></td>
            <td><?php echo $value['lastupdated']; ?></td>
        </tr>
    <?php } 
        }
        ?> 
    </table>
  </body>
  <?php include("./includes/footer.php"); ?>
</html>
