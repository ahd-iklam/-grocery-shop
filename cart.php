<?php require "inc/header.php";
//session_destroy();
?>
<div class="container">
    <div class="row">
            <div class="col-md-12">
                <div class="store-wrapper mt-3">
                    <div class=" main-title">
                        <h2 class="store-title"><i class="fas fa-shopping-cart mr-1"></i> cart </h2>
                    </div>
                    <?php if(isset($_GET['message'])) {
                        echo "<div class='text-center  else_message'>" . $_GET['message'] . "</div>";
                    }
                    ?>
                    <div class="store-content single">
                        <?php 
                            foreach($_SESSION as $name => $value) {
                                if(substr($name,0,9) == "products_"){
                                ?>
                        <table class="table table-hover table-bordered">
                            <thead>
                                <th>product name</th>
                                <th>price (Dh)</th>
                                <th>quantity</th>
                                <th>price total (Dh)</th>
                                <th>action</th>
                            </thead>
                            <tbody>
                                <td> 
                                    <?php echo !(empty($value['product'])) ? $value['product']: "";?>
                                </td>
                                <td>
                                <?php echo !(empty($value['price'])) ? $value['price']: "";?>
                                </td>
                                <td><?php echo !(empty($value['qte'])) ?   $value['qte']: "";?></td>
                                <td><?php echo !(empty($value['total'])) ? $value['total']: "";?></td>
                                <td> <a href="empty-cart.php?id=<?php echo !(empty($value['id'])) ? $value['id']: ""; ?>&price=<?php echo !(empty($value['total'])) ? $value['total']: "";  ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a> </td>
                            </tbody>
  
                        </table>
                        <a href=""><button class="btn btn-primary">buy now</button></a>
                        <?php  
                                }
                            }
                            ?>
                        

                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-4 ">
                    <table class="table table-bordered my-4 ">
                        <thead class="px-4">
                            <th>product</th>
                            <th>price</th>
                        </thead class="p-10">
                        <tbody>
                            <td><?php echo !(empty($_SESSION['count'])) ? $_SESSION['count']: "";?></td>
                            <td><?php echo !(empty($_SESSION['totaux'])) ? $_SESSION['totaux']: "";?></td>
                        </tbody>
                    </table>
                </div>
            </div> 
    </div>
</div>
<?php include 'inc/footer.php'; ?>