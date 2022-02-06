<?php
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../database/db.php';
require __DIR__ . '/../../models/Product.php';
require __DIR__ . '/../../controllers/ProductsController.php';
require __DIR__ .'/../../views/includes/header.php';

//require_once('../database/db.php');
if(isset($_POST['id']))
{
$existProduct = new ProductsController();
$product=$existProduct->getoneProduct();
}
if(isset($_POST['submit']))
{
$id=$_POST['id'];
$name=$_POST['name'];

$existProduct = new ProductsController();
$existProduct->updateProduct($id);

}
?>


<div class="d-sm-flex justify-content-between align-items-center mb-4">
        <span style="color: rgb(255,255,255);font-size: 20px;font-family: 'Baloo Bhaijaan', cursive;">Add product</span>
</div>
<div class="row justify-content-md-center">
                <div class="col-lg-6">
                        <div class="card shadow border-left-primary py-2">
                                <div class="card-body">
                                  <div class="p-5">

         
          <form class="user" method="post">
                                         
                                          <div class="form-group"><input type="text" name="id" class="form-control" placeholder="id"
          value="<?php echo $product->id;?>"
         ></div>

                                          <div class="form-group"><input type="text" name="name" class="form-control" placeholder="product name"
          value="<?php echo $product->name;?>"
         ></div>

                                          <div class="form-group">  <input type="text" name="type" class="form-control" placeholder="type"
          value="<?php echo $product->type;?>"></div>

                                          <div class="form-group">    <input type="text" name="regular_price" class="form-control" placeholder="price"
          value="<?php echo $product->regular_price;?>"></div>


                                          
                                          <div class="form-group"><input type="text" name="description" class="form-control" placeholder="description"
          value="<?php echo $product->regular_price;?>">
      </div></div>
<div class="form-group"> 
          <label for="customer">images</label>
          <input name="file" type="file"  class="hidden" >
      </div>
                                           <button class="btn btn-primary btn-block text-white btn-user" type="submit"  name="submit" class="btn btn-primary" style="background-color: rgb(0,0,0);font-size: 25px;">Modifier</button>
                                          <hr>
                                          <hr>
                                        
                                      </form>
                                        <a href="http://localhost/CHIHI_Hasnae_Wooecomerce/?page=product/list" class="btn btn-primary btn-smbtn-block text-white btn-user">
   Retourner vers la liste des ordres
   </a>
                                  </div>
                                </div>
                        </div>
                </div>

 </div>



