<?php 
// connected to the database
   $pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
  //  setting attribute for error
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $id = $_GET["id"] ?? null;

   
    if(!$id){
      header('Location: index.php');
      exit;
    }

   $statement = $pdo->prepare('SELECT * FROM products WHERE id = :id');
   $statement->bindValue(":id", $id);
   $statement->execute();
   $product = $statement->fetch(PDO::FETCH_ASSOC);


  
  

    // echo '<pre>';
    // var_dump($_FILES);
    // echo '</pre>';
      
    $errors = [];

    $title = $product["title"];
    $price = $product["price"];
    $description = $product["description"];

   if($_SERVER['REQUEST_METHOD'] === 'POST') {
    

    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
  
    if(!$title){
        $errors[] = 'Product title is required';
    }
    if(!$price){
        $errors[] = 'Product price is required';
    }

    if(!is_dir('images')){
      mkdir('images');
    }

   if(empty($errors)) {

      $image = $_FILES['image'] ?? null;
      $imagePath  = $product["image"];

      if($image && $image['tmp_name']) {
        
        $imagePath = 'images/'.randomString(8).'/'.$image['name'];
        mkdir(dirname($imagePath));
        move_uploaded_file($image['tmp_name'], $imagePath);
        // echo '<pre>';
        // print_r($imagePath);
        // echo '</pre>';
      }

  
      $statement = $pdo->prepare("UPDATE products SET title = :title, image = :image, description = :description, price = :price WHERE id = :id ");
      $statement->bindValue(':title', $title);
      $statement->bindValue(':image', $imagePath);
      $statement->bindValue(':description', $description);
      $statement->bindValue(':price', $price);
      $statement->bindValue(':id', $id);
      $statement->execute();

      -+ 
      // redirect to index page
      header('Location: index.php');
   }
   }

   function randomString($n){
      $characters="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
      for($i = 0; $i < $n; $i++ ) {
        $index = rand(0,strlen($characters) -1 );
        $str = $characters[$index];
      }

      return $str;
   
    }
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


    <h1 class="text-center mt-5">Update  Product <?php echo $product["title"] ?></h1>

   
    <div class="container mt-5" style="width: 35%;">

     <?php if(!empty($errors)) { ?>
      <?php foreach($errors as $error): ?>
      <div class="alert alert-danger">
        <div ><?php echo $error ?></div>
       </div>
      <?php endforeach; ?>
     <?php } ?>

    <form  action="" method="POST" enctype="multipart/form-data">
      
      <?php  if($product["image"]):   ?>
         <img src="<?php echo $product["image"]   ?>" style="width:100px">
      <?php endif; ?> 

      <div class="mb-3">
        <label class="form-label">Product Image</label>
        <input type="file" name="image" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Product Title</label>
        <input type="text" name="title" class="form-control" value="<?php echo $title ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Product description</label>
        <textarea type="text" name='description' class="form-control" value="<?php echo $description ?>"></textarea>
      </div>
      <div class="mb-3">
        <label class="form-label">Product Price</label>
        <input type="number" name="price" step='.01' class="form-control" value="<?php echo $price ?>">
      </div>
      <button type="submit" class="btn btn-primary mb-5">Submit</button>
    </form>
    </div>
    
  </body> 
</html>


