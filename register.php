<?php require "inc/header.php" ?>
<div class="container">
    <div class="form-content mt-3">
        <div class="register ">
            <h2 class="register-title text-center"><i class="fas fa-user mr-2"></i> register  </h2>
        </div>
        <div class="register-form mt-3">
            <?php 
            if(isset($_POST['submit']))
            {
                $username = escape_string($_POST['firstName'] ." ".$_POST['lastname']);
                $email =escape_string($_POST['useremail']);
                $password =escape_string($_POST['userpassword']);
                $sql = " INSERT INTO users VALUE ('' , '$username' , '$email' , '$password')";
                if(query($sql)) {
                    echo "<div class='text-center  else_message'> hi ".$name. " we are happy to be here welcome with us click here to  <a href='login.php'>sign up</a></div>";
                    redirect("login.php") ; 
                }
                else{
                    echo "<div class='text-center  else_message'> not good </div> <a href='register.php'> try again </a>" ;
                    die();
                }
            }
            ?>
            <form action="register.php" method="post">
                <div class="form-group">
                    <label for="firstName">First Name *</label>
                    <input type="text" name="firstName" id="firstName" placeholder ="First Name" required>
                </div>  
                <div class="form-group">
                    <label for="lastname">Last Name * </label>
                    <input type="text" name="lastname" id="lastname" placeholder ="Last Name" required>
                </div>  
                <div class="form-group">
                    <label for="useremail">Email * </label>
                    <input type="email" name="useremail" id="userEmail" placeholder ="email" required>
                </div>  
                <div class="form-group">
                <label for="userpassword">Password * </label>
                    <input type="password" name="userpassword" id="userPassword" placeholder ="password" required>
                </div>
                <div class="form-group">
                <button class="btn btn-info submit" name="submit" type="submit"> register </button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php require "inc/footer.php" ?>