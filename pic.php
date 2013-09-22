<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'pic_be.php';
        $id = $_GET['id'];
        $results = getPicture($id);
        $caption = $results[0]['caption'];
        $type = $results[0]['format'];
        $url = $results[0]['url'];
        $url = substr($url, 1);
        $name = $caption . "." . $type;
        $other = getOther($id);
        $next = $other['next'];
        $prev = $other['prev'];
        ?>
        <p><img src = '<?php echo $url ?>'></img></p>
        <?php 
        if($next){
           ?>
        <p><a href ="pic?id=<?php echo $next?>">Next</a></p>
        <?php
        }
        if($prev){
            ?>
        <p><a href ="pic?id=<?php echo $prev?>">Prev</a></p>
        <?php
        }
        ?>
    </body>
</html>
