<?php

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../database/db.php';
require __DIR__ . '/../../models/Order.php';
require __DIR__ . '/../../controllers/OrdersController.php';
require __DIR__ .'/../../views/includes/header.php';

//require_once('../database/db.php');
if(isset($_POST['submit']))
{
$newOrder = new OrdersController();
$newOrder->addOrder();


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
                                         
                                <div class="form-group"> 
          <label for="id">first_name</label>
          <input type="text" name="first_name" class="form-control" placeholder="customer">
      </div>
     

      <div class="form-group"> 
          <label for="id">last_name</label>
          <input type="text" name="last_name" class="form-control" placeholder="customer">
      </div>
      <div class="form-group"> 
          <label for="phone">phone</label>
          <input type="text" name="phone" class="form-control" placeholder="customer">
      </div>
      <div class="form-group"> 
          <label for="email">email</label>
          <input type="text" name="email" class="form-control" placeholder="customer">
      </div>
      <div class="form-group"> 
          <label for="address_1">address</label>
          <input type="text" name="address_1" class="form-control" placeholder="customer">
      </div>
  
      <div class="form-group"> 
          <label for="id">product_id</label>
          <input type="text" name="product_id" class="form-control" placeholder="customer">
      </div>
      <div class="form-group"> 
          <label for="id">quantity</label>
          <input type="text" name="quantity" class="form-control" placeholder="customer">
      </div>
     
 

                                      <div class="form-group">
      <button class="btn btn-primary btn-block text-white btn-user" type="submit"  name="submit" class="btn btn-primary" style="background-color: rgb(0,0,0);font-size: 25px;">Ajouter commande</button>
      </div>
                                          <hr>
                                          <hr>
                                        
                                      </form>
                                        <a href="http://localhost/CHIHI_Hasnae_Wooecomerce/?page=order/list" class="btn btn-primary btn-smbtn-block text-white btn-user">
   <i>Retourner vers la liste des commandes</i>
   </a>
                                  </div>
                                </div>
                        </div>
                </div>

 </div>
