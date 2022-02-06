<?php
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../database/db.php';
require __DIR__ . '/../../models/Product.php';
require __DIR__ . '/../../controllers/ProductsController.php';
require __DIR__ .'/../../views/includes/header.php';

//require_once('../database/db.php');

$data = new ProductsController();
$products= $data->getAllProducts();

?>

  <div class="topnav">
  <a style="margin-left:500px;" class="active" href="http://localhost/CHIHI_Hasnae_Wooecomerce/?page=product/list">Liste des produits</a>
  <a href="http://localhost/CHIHI_Hasnae_Wooecomerce/?page=order/list">Liste des commandes</a>
  <a href="http://localhost/CHIHI_Hasnae_Wooecomerce/?page=customer/list">Liste des clients</a>
  <a style="margin-left:330px" href="http://localhost/CHIHI_Hasnae_Wooecomerce/logout.php"><button type="button" class="btn btn-outline-warning">Se déconnecter</button></a>
  
</div>  
<span style="margin-left: 220px;margin-top: 200px">
                <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="http://localhost/CHIHI_Hasnae_Wooecomerce/?page=product/add" add style="margin-top: 20px;  text-align: center;font-size: 18px;width: 140px;height: 40px">Ajouter Produit</a>
            </span>
<div style="padding-left:16px">
  <h2></h2>
  <p></p>
</div>
<div class="container">
  <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom du produit</th>
      <th scope="col">Prix</th>
      <th scope="col">Total des ventes</th>
      <th scope="col">Statut</th>
      <th scope="col">Image</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <tbody>
                                              <?php
                  foreach($products as $product){
                  echo "<tr><td>" . $product["id"]."</td>
                            <td>" . $product["name"]."</td>
                            <td>" . $product["price"]."</td>
                            <td>" . $product["status"]."</td>
                            <td>" . $product["total_sales"]."</td>
                            <td><img class='rounded-circle mr-2' width='60' height='60'  height='50px' width='50px' src='".$product["images"][0]["src"]."'></td>
                    

                            <td class='d-flex flex-row'>
                            <form method='post' class='mr-1'action='?page=product/update'>
                            <input type='hidden' name='id' value=".$product["id"].">
                            <button class='btn btn-success'>Modifier</button>
                            </form>
                           

                           
                            <form method='post' class='mr-1' action='?page=product/delete'>
                            <input type='hidden' name='id' value=".$product["id"].">
                            <button class='btn btn-danger'>Supprimer</button>
                            </form>
                            </td>
                            
                            </tr>";
                
                  }
                  ?>
                  </tbody>
</table>


</div>