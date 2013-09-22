
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="table.css">
		<?php 
        include("./includes/header.php"); 
		?>
    </head>
    <body>
        <?php
        $albumid = $_GET['id'];
        include_once 'album_be.php';
        $values = getPictures($albumid);
        foreach($values as $value){
            $caption = $value['caption'];
            $picid = $value['picid'];
            $type = $value['format'];
            $url = $value['url'];
            $url = substr($url, 1);
           // $name = $caption. "." .$type;
            
        ?>
        <p><a href ="pic?id=<?php echo $picid; ?>"><img src = "<?php echo $url; ?>" alt="<?php echo $url ?>" width="150" height="150"></img></a></p>
        <?php } ?>
    </body>
	<?php 
	include("./includes/footer.php"); 
    ?>
</html>
