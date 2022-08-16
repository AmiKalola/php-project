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
        
        <center>
            <div class="main">
        <form action="insert.php" method="post" enctype="multipart/form-data">
            <label for="">Name:</label>
            <input  type="text" name="name" autocomplete="off"><br>
            <label for="" >Price</label>
            <input  type="text" name="price" autocomplete="off"><br>
            <label for="">Image</label>
            <input  type="file" name="image"><br>
            <button type="submit" name="upload" >Upload</button>
            
            
            
            
            
            </form>
        </div>
        </center>
        
        <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
         <th scope="col">Delete</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>
  
      <?php
      include 'config.php';
      $pic=mysqli_query($con,"SELECT `id`, `name`, `price`, `image` FROM `reg` ");
      while($row=mysqli_fetch_array($pic))
      {
          echo "<tr>
                    <td>$row[id]</td>
                     <td>$row[name]</td>
                      <td>$row[price]</td>
                       <td><img src='$row[image]' width='200px' height='100px'></td>
                        <td><a href='delete.php? id=$row[id]' 
                        class='btn btn-danger'>Delete</a></td>
                         
                          <td><a href='update.php? id=$row[id]' 
                        class='btn btn-danger'>Update</a></td>
                        
          
          </tr>";
      }
      
      ?>
      
      
      
      
  </tbody>
</table>
            </div>
    
    
    
    </body>
</html>