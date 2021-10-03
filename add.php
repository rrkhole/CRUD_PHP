<?php
include 'connection.php';
if(isset($_POST['Submit'])){
    $name=filter_input(INPUT_POST,'name');
    $Quantity=filter_input(INPUT_POST,'Quantity');
    $price=filter_input(INPUT_POST,'Price');
    if(empty($name and $Quantity and $price)){
        echo "Enter all fields";
    }else{
        $result= mysqli_query($mysqli, "INSERT INTO products(name,Quantity,Price) values('$name','$Quantity','$price')");
        echo "Data added successfully";
    }
}

?>

<html>
<head>
    <title>Add Data</title>
</head>

<body>
    
    
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td><input type="text" name="Quantity"></td>
            </tr>
            <tr>
                <td>Price</td><!-- comment -->
                <td><input type="text" name="Price"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    <br/><!-- comment -->
    <a href="view.php">View all items</a>
</body>
</html>
