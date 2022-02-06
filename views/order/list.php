<?php
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../database/db.php';
require __DIR__ . '/../../models/Order.php';
require __DIR__ . '/../../controllers/OrdersController.php';
require __DIR__ .'/../../views/includes/header.php';

//require_once('../database/db.php');

$data = new OrdersController();
$orders= $data->getAllOrders();

?>

  <div class="topnav">
  <a style="margin-left:500px" href="http://localhost/CHIHI_Hasnae_Wooecomerce/?page=product/list">Liste des produits</a>
  <a class="active">Liste des commandes</a>
  <a href="http://localhost/CHIHI_Hasnae_Wooecomerce/?page=customer/list">Liste des clients</a>
  <a style="margin-left:330px" href="http://localhost/CHIHI_Hasnae_Wooecomerce/logout.php"><button type="button" class="btn btn-outline-warning">Se déconnecter</button></a>
</div>

<span style="margin-left: 220px;margin-top: 200px">
                <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="http://localhost/CHIHI_Hasnae_Wooecomerce/?page=order/add" add style="margin-top: 20px;  text-align: center;font-size: 18px;width: 140px;height: 40px">Ajouter</a>
            </span>

<div style="padding-left:16px">
  <h2></h2>
  <p></p>
</div>
<div class="container">
  <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID Commande</th>
      <th scope="col">Client</th>
      <th scope="col">Adresse</th>
      <th scope="col">Contact</th>
      <th scope="col">Date commande</th>
      <th scope="col">Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
                                          
   
  <tbody>
                                              <?php
                  foreach($orders as $order){
                  echo "<tr><td>" . $order["id"]."</td>
                            <td>" .  $order["billing"]["first_name"].$order["billing"]["last_name"]."</td>
                           
                            <td>" . $order["shipping"]["address_1"]."</td>
                            <td>" . $order["billing"]["phone"]."</td>
                            <td>" . $order["date_created"]."</td>
                            <td>" . $order["status"]."</td>
                          
                            <td class='d-flex flex-row'>
                            <form method='post' class='mr-1'action='?page=order/update'>
                            <input type='hidden' name='id' value=".$order["id"].">
                            <button class='btn btn-success'>Modifier</button>
                            </form>
         
                           
                            <form method='post' class='mr-1' action='?page=order/delete'>
                            <input type='hidden' name='id' value=".$order["id"].">
                            <button class='btn btn-danger'>Supprimer</button>
                            </form>
                            </td>
                            
                            </tr>";
                
                  }
                  ?>
                  </tbody>
</table>


</div>