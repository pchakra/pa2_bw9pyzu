  <?php 
  $album_id = $_POST['albumid'];
  $pic_id = $_POST['picid'];
  $op = $_POST['op'];
  if($op == 'delete'){
      if(!$album_id){
          echo "No Album Id";
          exit;
      }
	  if(!$pic_id){
          echo "No Pic Id";
          exit;
      }
	  require_once 'edit_be.php';
      $result = deletePic($album_id, $pic_id);
      if($result){
          echo "Deleted Picture!";
      }
  }
  ?>