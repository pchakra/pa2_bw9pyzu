<html>
  <head>
    <link rel="stylesheet" type="text/css" href="../table.css">

  </head>
  <body>
    <h1 class="title-thin">/albums/edit page here.</h1>
    <?php 
      $username = $_GET['username']; 
      $_SESSION['user'] = $username;
      require_once 'edit_be.php';
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $op = $_POST['op'];     

          if($op == 'delete'){
              $delete_id = $_POST['albumid'];
              if(!$delete_id){
                  echo "No delete id";
                  exit;
              }
              $result = deleteAlbum($delete_id);
              if($result){
                  echo "Deleted Album";
              }
          }
          if($op == 'add'){
             $title = $_POST['title'];
             $username1 = $_POST['username'];
             if(!$username1 or !$title){
                 echo "No inputs";
                 exit;
             }
             $result = addAlbum($username1, $title);
             if($result)
                 echo "Created new album!";
          }
      }
      //$link = "edit.php?username=" . $user;
      //echo "<a href = $link>See List </a>";

        $values = albums_of_user($username);
    ?>
    <table class="table" style="left:35em">
        <tr class="row">
            <th class ="header">Album ID</th>
            <th class ="header">Title</th>
            <th class ="header">Edit</th>
            <th class ="header">Delete</th>
            
        </tr>  
    
    <?php
    foreach($values as $value){
    ?>
        <form name="submit" action="edit?username=<?php echo $username; ?>" method="POST">
        <tr class="row">
            <td><?php echo $value['albumid']; ?></td>
            <td><?php echo $value['title']; ?></td>
            <td><a href = "../album/edit?id=<?php echo $value['albumid']; ?>">[Edit]</a> </td>
            <input type="hidden" name="albumid" value="<?php echo $value['albumid']; ?>"/>
           <td><input type="submit" value="delete" name="op"/></td>
        </tr>
        </form>
    <?php } ?> 
        
    </table>
    <form name="add" action="edit?username=<?php echo $username; ?>" method="POST">
        <table class="table" style="left:5em">
            <tr>
            <td>Add new album: <input type="text" name="title"/></td>
            <input type="hidden" name="username" value="<?php echo $username; ?>"/>
            <td><input type="submit" value="add" name="op"/></td>
            </tr>
        </table>
            
    </form>
  </body>

  
</html>
