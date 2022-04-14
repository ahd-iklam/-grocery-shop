<?php include "inc/header.php";?>
<div class="container">
    <div class="store-wrapper mt-3">
        <div class=" main-title">
            <h2 class="store-title"><i class="fas fa-shopping-basket"></i> store </h2>
        </div>
        <div class="row">
        <?php
            $query = " SELECT * FROM products ";
            $result = query($query); // query is a function cames from functions.php                       
            while($row=fetch_array($result)) 
            {
        ?> 
            <div class="col-lg-4">
                <div class="store-content">
                    <div class="product-title">
                    <h3> <?php echo $row['product_title']; ?></h3>
                    </div>
                    <div class="image">
                    <img src="<?php echo $row['product_image']; ?>" class="img-fluid img-thumbnail" alt="Responsive image">
                    </div>
                    <div class="product-price">
                    <p> <span><?php echo  $row['product_price'];?> DH </span><span><?php echo $row['old_price'];?> DH </span></p>
                    </div>
                    <div class="product-description">
                        <p class="lead"><?php echo  $row['short_desctiption'];?></p>
                    </div>
                    <a href="product.php?id=<?php echo $row['product_id']?>"><button type="button" class="btn btn-info">more info</button></a>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>
<?php require "inc/footer.php";?>