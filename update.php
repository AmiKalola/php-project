<!DOCTYPE html>
<html lang="en">
    <head>
    <title>
        CRUD operation
        
        </title>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    </head>
    <body>
        
        <?php 
        include 'config.php';
        $id=$_GET['id'];
        $Record=mysqli_query($con,"SELECT * FROM `reg` WHERE id= $id");
        $data=mysqli_fetch_array($Record);
        
        ?>
        
        
        
            <center>
            <div class="main">
        <form action="update1.php" method="post" enctype="multipart/form-data">
            <label for="">Name:</label>
<input  type="text" name="name" value="<?php echo $data['name'] ?>"><br>
            <label for="" >Price</label>
            <input  type="text" name="price" value="<?php echo $data['price']?>"><br>
            <label for="">Image</label>
            <input  type="file" name="image" value="<?php echo $data['image'] ?>"><img src="<?php echo $data['image']?>" width="200px" height="200px"><br>
            
            <input type="hidden" name="id" 
                   value="<?php  echo $data['id'] ?>">
            <button type="submit" name="update" 
                    class="btn btn-danger m-2">Update</button>
            
            
            
            
            
            </form>
        </div>
        </center>
    
    </body>
</html>