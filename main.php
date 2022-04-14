<div class="main-content mb-4">
    <div class="row">
        <div class="col-lg-4">
            <div class="sidebar float-left">
                <div class="sidebar-header main-title">
                    <h2 class="side-title"><i class="fas fa-map-marker-alt mr-1"></i> cities </h2>
                </div>
                <div class="sidebar-content">
                    <ul class="cities-list">
                        <li>Ahfir  <span>6</span></li>
                        <li>berkan <span>7</span></li>
                        <li>oujda  <span>9</span></li>
                        <li>saidia <span> 5</span></li>
                        <li>tanger <span>4 </span></li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8">           
            <div class="store-wrapper ">
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
                    <div class="col-lg-6">
                        <div class="store-content mb-3">
                            <div class="image">
                                <img src="<?php echo $row['product_image']; ?>" class="img-fluid img-thumbnail" alt="Responsive image">
                            </div>
                            <div class="product-title">
                                <h3> <?php echo $row['product_title']; ?></h3>
                            </div>
                            <div class="product-price">
                            <p> <span><?php echo  $row['product_price'];?> DH </span><span><?php echo $row['old_price'];?> DH </span></p>
                            </div>
                            <div class="product-description">
                                <p class="lead"><?php echo $row['short_desctiption'];?> </p>
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
    </div>
</div>