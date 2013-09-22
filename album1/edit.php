<html>
  <head>
    <link rel="stylesheet" type="text/css" href="../table.css">
  	<?php 
        include("../includes/header.php"); 
    ?>
  </head>
  <!DOCTYPE html>
  <body>
    <h1 class="title-thin">/album/edit page here.</h1>
    <?php
        $id = $_GET['id']; 
        $_SESSION['id'] = $id;
        require_once 'edit_be.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['op'])){
  $album_id = $_POST['albumid'];
  $op = $_POST['op'];
  if($op == 'delete'){
	  $pic_id = $_POST['picid'];
	  $format = $_POST['format'];
          $url = $_POST['url'];
      if(!$album_id){
          echo "No Album Id";
          exit;
      }//../pictures/a3f4ce4a5a7db7488bbbe357997db6a6.png.png
	  if(!$pic_id){
          echo "No Pic Id";
          exit;
      }
      require_once 'edit_be.php';
      $result = deletePic($album_id, $pic_id);
      if($result){
          echo "Deleted Picture!";
      }
      $file = "../pictures/" .$pic_id . "." .$format;
      unlink($file);
      
      
  }
  if($op == 'add'){
      
    $allowedExts = array("gif", "jpeg", "jpg", "png");
    $temp = explode(".", $_FILES["file"]["name"]);
    $extension = end($temp);

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] === "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    date_default_timezone_set('America/Los_Angeles');
    $date = new DateTime();
    $value = $date->format('U');
    
    $hash = hash('md5', $value);
    $full_name = $hash . "." .$extension;
    $new_name = $hash;
    if (file_exists("../pictures/" . $full_name))
      {
      echo $full_name . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "../pictures/" . $full_name);
      require_once 'edit_be.php';
      $result = addPic($album_id,$extension, $new_name);
      
      }
    }
  }
else
  {
  echo "Invalid file";
  }
  }
}
        }
        $values = pics_of_album($id);
    ?>
    <table class="table" style="left:35em">
        <tr class="row">
            <th class ="header">Album ID</th>
	    <th class ="header">Pic ID</th>
            <th class ="header">Title</th>
            <th class ="header">Delete</th>
            
        </tr>  
    
    <?php
    if($values){
    foreach($values as $value){
    ?>
        <form name="submit" action="edit?id=<?php echo $id?>" method="POST">
    
        <tr class="row">
            <td><?php echo $value['albumid']; ?></td>
            <td><?php echo $value['picid']; ?></td>
	    <td><?php echo $value['caption']; ?></td>
            <input type="hidden" name="albumid" value="<?php echo $value['albumid']; ?>"/>
	    <input type="hidden" name="picid" value="<?php echo $value['picid']; ?>"/>
            <input type="hidden" name="format" value="<?php echo $value['format']; ?>"/>
            <input type="hidden" name="url" value="<?php echo $value['url']; ?>"/>
           <td><input type="submit" value="delete" name="op"/></td>
        </tr>
        </form>
    <?php } 
    }
    ?> 
        
    </table>
    
    
    <form action="edit?id=<?php echo $id?>" method="post" enctype="multipart/form-data">
        <table class="table" style="left:5em">
        <tr><td><label for="file">Filename:</label></td>
        <td><input type="file" name="file" id="file"></td></tr>
        <input type="hidden" name="albumid" value="<?php echo $id; ?>"/>
        <tr><td><input type="submit" name="op" value="add"></td></tr>
        </table>
    </form>
  </body>
  
<?php 

	include("../includes/footer.php"); 
?>
</html>