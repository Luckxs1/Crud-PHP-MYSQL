<?php 

$db = mysqli_connect("localhost", "root", "", "data");
if(!$db){
    die('error in db' . mysqli_error(mysqli_connect("localhost", "root", "", "data")));
}else{

    $id = $_GET['id'];
    $sql = "SELECT * FROM php_crud WHERE id = $id";
    $run = mysqli_query($db,$sql);
  
        while($row = mysqli_fetch_array($run)){
                $name = $row['name'];
                $email = $row['email'];
                $address = $row['address'];
            }    
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
<form autocomplete="off" method="post">
        <label for="">Name</label>
        <input type="text" name="name" value="<?php echo $name; ?>">
        <br><br>

        <label for="">Email</label>
        <input type="text" name="email" value="<?php echo $email; ?>">
        <br><br>

        <label for="">Address</label>
        <input type="text" name="address" value="<?php echo $address; ?>">
        <br><br>

        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>

<?php 
    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        $qry = "UPDATE php_crud SET name='$name', email='$email', address='$address' WHERE id='$id' ";
        if(mysqli_query($db,$qry)){
            header('location: index.php');
        }else{
            echo mysqli_error($db);
        }
    }
?>