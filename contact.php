<?php require "inc/header.php" ?>
<div class="container">
    <div class="form-content mt-3">
        <div class="register ">
            <h2 class="register-title text-center"><i class="fas fa-envelope-open-text"></i> Contact Us  </h2>
        </div>
        <div class="register-form mt-3">
        <?php 
            if(isset($_GET['submit']))
            {
                $email = escape_string($_GET['useremail']);
                $message = escape_string($_GET['message']);
                $result = " INSERT INTO contacts VALUES (' ' ,  '$email' , '$message')";
                if(query($result)){
                    echo "<div class='text-center  else_message'>your message has been sent</div> ";
                }
            }
                ?>
            <form action="contact.php" method="get">
                <div class="form-group">
                    <label for="useremail">Email * </label>
                    <input type="email" name="useremail" id="userEmail" placeholder =" your email" required>
                </div>  
                <div class="form-group">
                    <label for="message">message * </label>
                    <textarea name="message" id="message" placeholder="always happy to contact us" ></textarea>
                </div>  
                <div class="form-group">
                <button type="submit" class="btn btn-info submit" name="submit"> contact us </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require "inc/footer.php" ?>