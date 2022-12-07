<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="col-lg-4">
  <h2>Product Management</h2>
  <form action="" name="form1" method="post" enctype="multipart/form-data">
  <div class="form-group">
      <label for="text">ProductId:</label>
      <input type="text" class="form-control" id="ProductId" placeholder="product ID" name="ProductId">
    </div>
    <div class="form-group">
      <label for="text">Product:</label>
      <input type="text" class="form-control" id="ProductName" placeholder="product name" name="ProductName">
    </div>
    <div class="form-group">
      <label for="pwd">Model:</label>
      <input type="text" class="form-control" id="model" placeholder="Model" name="model">
    </div>
    <div class="form-group">
      <label for="pwd">Quantity:</label>
      <input type="number" class="form-control" id="quantity" placeholder="quantity" name="quantity">
    </div>
    <div class="form-group">
      <label for="pwd">ProductPrice:</label>
      <input type="number" class="form-control" id="ProductPrice" placeholder="Product Price" name="ProductPrice">
    </div>
 
    <div class="form-group">
    <label for="pwd">Product condition:</label>
    <input list="P_Condition" class="form-control"  placeholder="Product Condition" name="P_Condition">
            <datalist id="P_Condition">
                <option value="New"></option>
                <option value="refurbished"></option>
                

            </datalist>
    </div>
    <div class="form-group">
      <label for="pwd">subcategory:</label>
      <input type="text" class="form-control" id="subcategory" placeholder="subcategory" name="subcategory">
    </div>
    <div class="form-group">
      <label for="pwd">Productimage:</label>
      <input type="file" class="form-control" id="Productimage" name="Productimage">
    </div>
    <div class="form-group">
      <label for="pwd">description:</label>
      <input type="text" class="form-control" id="description" placeholder="Product Price" name="description">
    </div>
    
    <button type="submit" name="insert" class="btn btn-default">Insert</button>
    <button type="submit" name="updateprice" class="btn btn-default">Update Price</button>
    <button type="submit" name="updatecondition" class="btn btn-default">Update Condition</button>
    <button type="submit" name="delete" class="btn btn-default">Delete</button>

  </form>
</div>
</div>
<div class="col-lg-12">

</div>

<?php


if(isset($_POST["insert"]))
{
  $v1=rand(1111,9999);
    $v2=rand(1111,9999);
    $v3=$v1.$v2;
    $v3=md5($v3);
    $fnm=$_FILES["Productimage"]["name"];
    $dst="./sora/".$v3.$fnm;
    $dst1="sora/".$v3.$fnm;

    move_uploaded_file($_FILES["Productimage"]["tmp_name"],$dst);
    mysqli_query($link,"insert into product values(null,'$_POST[ProductName]','$_POST[model]','$_POST[quantity]','$_POST[ProductPrice]','$_POST[P_Condition]',null,'$_POST[subcategory]', '$dst1','$_POST[description]')");
    
  
  }

if(isset($_POST["delete"])){
  mysqli_query($link,"delete from product where ProductId= '$_POST[ProductId]'") or die(mysqli_error($link));

}

if(isset($_POST["updateprice"])){
  mysqli_query($link,"update product set ProductPrice= '$_POST[ProductPrice]' where ProductId = '$_POST[ProductId]'    ") or die(mysqli_error($link));
}

if(isset($_POST["updatecondition"])){
  mysqli_query($link,"update product set 	P_Condition= '$_POST[P_Condition]' where ProductId = '$_POST[ProductId]' ") or die(mysqli_error($link));

}


?>


</body>
</html>