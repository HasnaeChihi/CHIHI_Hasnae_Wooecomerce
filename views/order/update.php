<?php
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../database/db.php';
require __DIR__ . '/../../models/Order.php';
require __DIR__ . '/../../controllers/OrdersController.php';
require __DIR__ .'/../../views/includes/header.php';

//require_once('../database/db.php');
if(isset($_POST['id']))
{
$existOrder = new OrdersController();
$order=$existOrder->getoneOrder();
}
if(isset($_POST['submit']))
{
$id=$_POST['id'];
$name=$_POST['name'];

$existOrder = new OrdersController();
$existOrder->updateOrder($id);

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


   <form method="post">
   <div class="form-group"type='hidden' > 
          <label for="id">id</label>
          <input type="text" name="id" class="form-control" placeholder="customer"
          value="<?php echo $order->id;?>"
         >
      </div>
      <div class="form-group"type='hidden' > 
          <label for="first_name">first_name</label>
          <input type="text" name="first_name" class="form-control" placeholder="customer"
          value="<?php echo $order->billing->first_name;?>"
         >
      </div>
      <div class="form-group"type='hidden' > 
          <label for="last_name">last_name</label>
          <input type="text" name="last_name" class="form-control" placeholder="customer"
          value="<?php echo $order->billing->last_name;?>"
         >
      </div>
      <div class="form-group"type='hidden' > 
          <label for="phone">phone</label>
          <input type="text" name="phone" class="form-control" placeholder="customer"
          value="<?php echo $order->billing->phone;?>"
         >
      </div>
      <div class="form-group"type='hidden' > 
          <label for="phone">email</label>
          <input type="text" name="email" class="form-control" placeholder="customer"
          value="<?php echo $order->billing->email;?>"
         >
      </div>
      <div class="form-group"type='hidden' > 
          <label for="address">address</label>
          <input type="text" name="address_1" class="form-control" placeholder="customer"
          value="<?php echo $order->shipping->address_1;?>"
         >
      </div>
     
      </div>
         <button class="btn btn-primary btn-block text-white btn-user" type="submit"  name="submit" class="btn btn-primary" style="background-color: rgb(0,0,0);font-size: 25px;">Modifier</button>   

 
      </div>

   </form>
<div class="container">
   <a href="http://localhost/CHIHI_Hasnae_Wooecomerce/?page=order/list" class="btn btn-sm btn-primary mr-2 mb-2">
   Retourner vers la liste des ordres
   </a>
</div>