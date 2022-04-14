<?php require "inc/header.php";?>
<div class="container">
    <div class="row">
    <?php
        $id = escape_string($_GET['id']);
         $query = " SELECT * FROM products WHERE product_id = '$id'";
         $result = query($query); // query is a function cames from functions.php                       
        $row = fetch_array($result);
    ?> 
        <div class="col-md-9">
            <div class="store-wrapper mt-3">
                <div class=" main-title">
                    <h2 class="store-title"><i class="fas fa-shopping-basket"></i> store </h2>
                </div>
                <div class="store-content single">
                    <div class="image">
                        <img src="<?php echo $row['product_image']; ?>" class="img-fluid img-thumbnail" alt="Responsive image">
                    </div>
                    <div class="product-title">
                        <h3><?php echo $row['product_title']; ?></h3>
                    </div>
                    <div class="product-price">
                    <p> <span><?php echo  $row['product_price'];?> DH </span><span><?php echo $row['old_price'];?> DH </span></p>
                    </div>
                    <div class="product-description">
                        <p class="lead">
                        <?php echo $row['product_description'];?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-3">
            <div class="shop-form">
                <form action ="checkout.php"  method = "post">
                    <div class="form-group">
                        <label for="qte">Qte : </label>
                        <input type="number" name="qte" style="width:80px" value = "1" min="1">
                        <input type="hidden" name="product" value="<?php echo $row['product_title']; ?>" >
                        <input type="hidden" name="id" value="<?php echo $row['product_id']; ?>" >
                    </div>
                    <button type="submit" class="btn btn-info"> <i class="fas fa-shopping-cart mr-1"></i>  Add to Cart </button>
                </form> 
            </div>
        </div>
    </div>
</div>
<?php require "inc/footer.php";?>
