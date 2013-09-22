<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="table.css">
        <title></title>
    </head>
    <body>
        <h1 class="header1">Users list</h1>
        <?php
        include_once 'index_be.php';
        $values = users();
        ?>
        <table class="table" style="left:25em">
            <tr class="row">
                <th class ="header">Username</th>
                <th class ="header">First Name</th>
                <th class ="header">Last Name</th>
                <th class ="header">Email</th>
            </tr>  
        
        <?php
        foreach($values as $value){
        ?>
            <tr class="row">
                <td><?php echo $value['username']; ?></td>
                <td><?php echo $value['firstname']; ?></td>
                <td><?php echo $value['lastname']; ?></td>
                <td><?php echo $value['email']; ?></td>
            </tr>
        <?php } ?>
        </table>
    </body>
</html>
