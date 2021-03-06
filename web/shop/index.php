<?php
    session_start();
    
    include '../connect.php';

    $total = 0;
    
?>
<html lang="en">
    <head>
        <title>CS 313 - Ponder 03</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <script src="functions.js"></script>
        <style>
            ::-webkit-scrollbar {
                    display: none;
            }
        
        </style>
    </head>
    <body>
        <?php include '../nav.php';  ?>
        <div id="container">
            <main id="main">
                
                    <?php
                        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                            $sql = $db->prepare('SELECT m.module_id, m.module_name, m.short_description, m.price FROM modules m LEFT JOIN (SELECT * FROM user_orders WHERE user_account_id = :id) orders ON m.module_id = orders.module_id WHERE orders.module_id IS NULL;');
                            $sql->bindParam(':id', $_SESSION['id']);
                            $sql->execute();
                            $results = $sql->fetchAll();
                        }
                        else {
                            $results = $db->query('SELECT * FROM modules');
                        }   
                        foreach ($results as $row) {
                               
                                
                                if(!isset($_SESSION['cart'][$row['module_id']])) {
        
                                    echo '<div id="item-' . $row['module_id'] . '" class="item">'.
                                    '<h2 id="item-name-' . $row['module_id'] . '" class="item-name">'. $row['module_name'] . '</h2>' . 
                                    '<img id="item-image-' . $row['module_id'] . '" src="icon' .  $row['module_id'] . '.png" height="100px" style="float:right;">' . 
                                    '<p id="item-description-' . $row['module_id'] . '"> Description: ' . $row['short_description'] . '</p>' . 
                                    '<h3 id="item-price-' . $row['module_id'] . '" class="item-price"> Price: ' . $row['price'] . '</h3>' . 
                                    '<button id="button' . $row['module_id'] . '" onclick="addToCart(' . $row['module_id'] . ')"><span>Add to Cart</span></button>' . 
                                    '</div>';
                                }
                            }


                    ?>
               
                
            </main>
            <aside id="cart">
            <h1>Cart<span id="total"></span></h1>
                <div id="float">
                    <?php
                if(sizeof($_SESSION['cart']) > 0){
                    foreach($_SESSION["cart"] as $item){
                        echo '<div id="cart-item-' . $item['id'] . '" class="cart-item"> <div class="cart-item-text"> <span id="cart-item-name-' .
                         $item['id'] . '">' . $item['name'] . '</span> <span id="button'. $item['id'] . '" class="close" onclick="removeFromCart('. $item['id'] .
                          ',' . $item['price'] .',' . '1)"></span> <p class="cart-item-price"> Price: $' . 
                          $item['price'] . '</p> </div> <img id="cart-item-image-' . $item['id'] . '" class="cart-item-image" src="icon' . $item['id'] . '.png"><p class="cart-item-description" id="cart-item-description-' . $item['id'] . '" style="display:none;">' . 
                          '<strong>Description:</strong>Lorem Ipsum Set Dolor Lorem Ipsum Set Dolor Lorem Ipsum Set Dolor Lorem Ipsum Set Dolor Lorem Ipsum Set Dolor Lorem Ipsum Set Dolor Lorem Ipsum Set Dolor Lorem Ipsum Set Dolor Lorem Ipsum Set Dolor</p></div>';


                        $total += $item['price'];
                        
                    }

                    echo '<script> setTotal(' . $total . ') </script>'; 

                }
                ?>
                    
                        
                    </div>
                    <a href="./cart.php"><button class="button" style="margin-right: 8px"><span>View Cart</span></button></a>
                    <a href="./checkout.php"><button><span>Checkout</span></button></a>                   
                </div>
            </aside>
        </div>
    </body>
</html>

