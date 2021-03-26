<?php 
  // connected to the database
   $pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
  //  setting attribute for error
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //  filtering order by crate data
   $statement =   $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
  //  execute 
   $statement->execute();
  //  fetching all 
   $products = $statement->fetchAll(PDO::FETCH_ASSOC);
      // echo '<pre>';
      // print_r($products);
      // echo '</pre>';
?>



<!doctype html>
<html lang="en">
  <!-- <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Products Crud</title>
  </head>
  <body>
    <h1 class="text-center mt-5">Product Crud</h1>
    
 <div class="container mt-5">
<a href="create.php" class="btn btn-sm btn-primary mb-2">Create Product</a>

 <table class="table table-bordered ">
  <thead class="text-center">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Create Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <?php foreach($products as $i => $product){ ?>
     <tr>
      <th scope="row"><?php $i + 1 ?></th>
      <td></td>
      <td><?php echo $product["title"] ?></td>
      <td><?php echo $product["price"] ?></td>
      <td><?php echo $product["create_date"] ?></td>
      <td>
        <button type="button" class="btn btn-sm btn-primary">Add</button>
        <button type="button" class="btn btn-sm btn-danger">Delete</button>
      </td>      
    </tr>
    <?php } ?>
</table>
 </div>
    
  </body> 
</html>