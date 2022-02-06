<?php
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../database/db.php';
require __DIR__ . '/../../models/Product.php';
require __DIR__ . '/../../controllers/ProductsController.php';
require __DIR__ .'/../../views/includes/header.php';

//require_once('../database/db.php');
if(isset($_POST['submit']))
{
$newProduct = new ProductsController();
$newProduct->addProduct();


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
                                         
                                          <div class="form-group"><input class="form-control form-control-user" type="text"  placeholder="Name..." name="name"></div>

                                          <div class="form-group"><input class="form-control form-control-user" type="text"  placeholder="type..." name="type"></div>

                                          <div class="form-group"><input class="form-control form-control-user" type="text"  placeholder="Regular Price..." name="regular_price"></div>

                                          <div class="form-group"><input class="form-control form-control-user" type="text"  placeholder="Description..." name="description"></div>

                                          <div class="form-group"><input class="form-control form-control-user" type="text"  placeholder="Short Description..." name="short_description"></div>
<div class="form-group"><input class="form-control form-control-user" type="text"  placeholder="categorie..." name="categories"></div>
                                           <div class="form-group"> 
          <label for="customer">images</label>
          <input name="file" type="file"  class="hidden" >
      </div>
                                          <!-- <div class="form-group"><input class="form-control form-control-user" placeholder="picture URL..." type="text"  name="image"></div> -->

                                      <div class="form-group">
      <button class="btn btn-primary btn-block text-white btn-user" type="submit"  name="submit" class="btn btn-primary" style="background-color: rgb(0,0,0);font-size: 25px;">Ajouter produit</button>
      </div>
                                          <hr>
                                          <hr>
                                        
                                      </form>
                                        <a href="http://localhost/CHIHI_Hasnae_Wooecomerce/?page=product/list" class="btn btn-primary btn-smbtn-block text-white btn-user">
   <i>Retourner vers la liste des produits</i>
   </a>
                                  </div>
                                </div>
                        </div>
                </div>

 </div>
