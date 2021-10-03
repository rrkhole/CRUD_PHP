<?php
include "connection.php";
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $Quantity=$_POST['qty'];
    $price=$_POST['price'];
    if(empty($name and $Quantity and $price)){
        echo "None of the fields can be empty";
    }else{
    $result=mysqli_query($mysqli,"UPDATE products SET name='$name', Quantity='$Quantity', price='$price'where id='$id'");
    header("location:view.php");
    }
  }
?>
<?php
include "connection.php";
$id=$_GET['id'];
$result= mysqli_query($mysqli, "SELECT * FROM products where id=$id");
while($res=mysqli_fetch_array($result)){
    $name=$res['name'];
    $Quantity=$res['Quantity'];
    $Price=$res['Price'];
}
?>

<html>
    <head>
        <link href="styles.less" type="text/css" rel="stylesheet"><!-- comment -->
        <title>Update</title>
    </head>
    <body>
        <a href="view.php">View Products</a> | <a href="add.php">Add items</a>
    <br/><br/>
	
    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
            <tr> 
                <td>Quantity</td>
                <td><input type="text" name="qty" value="<?php echo $Quantity;?>"></td>
            </tr>
            <tr> 
                <td>Price</td>
                <td><input type="text" name="price" value="<?php echo $Price;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>