<?php
include 'connection.php';
$result= mysqli_query($mysqli,"SELECT * From products");
?>
<html>
<head>
    <link href="styles.less" rel="stylesheet" type="text/css">
    <title>Homepage</title>
</head>

<body>
    <a href="add.php">Add New Items</a><!-- comment --> 
    <br><!-- comment -->
    <br/><!-- comment -->
    <table width='80%' border=0>
    <tr bgcolor='#CCCCCC'>
        <td>Name</td>
        <td>Quantity</td>
        <td>Price (Rupees)</td>
        <td>Update</td>
    </tr>
    <?php
    while($res=mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$res['name']."</td>";
        echo "<td>".$res['Quantity']."</td>";
        echo "<td>".$res['Price']."</td>";
        echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a>|<a href=\"delete.php?id=$res[id]\" Onclick=\"return confirm('Are you sure you want to delete?')\">Delete</a>";
                
    }
    ?>
    </table>
</body>
</html>