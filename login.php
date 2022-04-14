<?php require "inc/header.php" ?>
<div class="container">
    <div class="form-content mt-3">
        <div class="register ">
            <h2 class="register-title text-center"><i class="fas fa-sign-in-alt mr-1"></i> connexion  </h2>
        </div>
        <div class="register-form mt-3">
            <?php
            if(isset($_POST['submit']))
            { 
                $email =escape_string($_POST['useremail']);
                $password =escape_string($_POST['userpassword']);
                $sql = "SELECT * FROM users WHERE email = '$email' AND password='$password' ";
                $result = query($sql);
                $users = fetch_array($result);
                if($users != null)
                {
                    $_SESSION['logged'] = true;
                    $_SESSION['user_name'] = $users['user_name'];
                    $_SESSION['user_id'] = $users['user_id'];
                    redirect("index.php") ;              
                }
                else{
                    echo  "<div class='text-center  else_message'> opps something wrong please verify that you have entered the coreect infromation <a href='login.php'>try again</a>   </div> " ;
                    die();
                }
            }
            ?>
            <form action="login.php" method = "post">
                <div class="form-group">
                    <label for="useremail">Email * </label>
                    <input type="email" name="useremail" placeholder =" your email" required>
                </div>  
                <div class="form-group">
                <label for="userpassword">Password * </label>
                    <input type="password" name="userpassword" placeholder =" your password" required>
                </div>
                <div class="form-group">
                <button class="btn btn-info submit" name="submit"> connexion </button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php require "inc/footer.php" ?>