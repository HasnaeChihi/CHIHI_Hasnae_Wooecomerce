<?php
require __DIR__ . '/../vendor/autoload.php';
use Automattic\WooCommerce\Client;
class DB{
    
     public function connect($ck, $cs,$site)
    {

        $woocommerce = new Client(
            $site,
            $ck,
            $cs,
            
            [
                'wp_api' => true,
                'version' => 'wc/v3',
                'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS
            ]
        );
       
      //  echo json_encode($woocommerce->get('products'));
        return  $woocommerce ;
    }
}


?>

