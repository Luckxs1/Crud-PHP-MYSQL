<?php 
 require 'pageread.php';
$db = mysqli_connect("localhost", "root", "", "data");
 
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $sql = "INSERT INTO php_crud VALUES(null, '$name', '$email', '$address')";
    if(mysqli_query($db,$sql)){
        echo '<script>alert("User Registered Successfully");</script>';
        header('location: index.php');
    }else{
        echo mysqli_error($db);
    }
}else if(isset($_POST['search'])){
  
        $searchKey = $_POST['search'];
        $sql = "SELECT * FROM php_crud WHERE name like '%$searchKey%' OR address like '%$searchKey%' ";
        $result = mysqli_query($db,$sql);

}else{
    
    $sql = "SELECT * FROM php_crud LIMIT $offset, $total_records_per_page";
    $result = mysqli_query($db,$sql);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    
</head>
<body>
    <form autocomplete="off" method="post">
        <input type="hidden" name="submit">
        <label for="">Name</label>
        <input type="text" name="name" placeholder="Enter Name">
        <br><br>

        <label for="">Email</label>
        <input type="text" name="email" placeholder="Enter email">
        <br><br>

        <label for="">Address</label>
        <input type="text" name="address" placeholder="Enter address">
        <br><br>

       <button>Submit</button>
    </form>
    
    <hr>
    <form action="" method="post">
        <label for="">Search</label>
        <input type="text" placeholder="Search here" name="search" value="">
        <button>Search</button>
    </form>
    <h3>User List</h3>
   
    <table style="width: 80%;" border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>ADDRESS</th>
            <th>ACTION</th>
        </tr>
        <?php 
           
                
            while($row = mysqli_fetch_array($result)):
                $total_records = $row['id'];
                
        ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $id; ?>">Edit</a> |
                        <a href="delete.php?id=<?php echo $id; ?>" onclick="return confirm('Are You Sure?')">Delete</a>
                    </td>
                </tr>
                <?php
                  endwhile;
                
                ?>
               
               
        </table>
        <p>Page <?php echo $page_no." of ".$total_no_of_pages; require 'pagination.php' ?></p>

       
        
    </body>
</html>

