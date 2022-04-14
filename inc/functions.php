<?php 
//session_destroy();
require "config.php"; 
function redirect($location){
    header("location:".$location);
}
function query($sql){
    global $connexion;
    return mysqli_query($connexion,$sql);
}
function escape_string($string){
    global $connexion;
    return mysqli_real_escape_string ($connexion,$string);
}

function fetch_array($result){
    return mysqli_fetch_array($result);
}
function logout(){
    $_SESSION['logged'] = false;
    session_destroy();
    redirect("index.php");
}
function remove_cart_items($id,$price) {
    unset($_SESSION['products_'.$id]);
    $_SESSION['count'] -= 1;
    $_SESSION['totaux'] -= $price ;
    redirect('cart.php');
    if($_SESSION['count'] == 0) {
        return 0;
    }
}
// $cookie_name = "user";
// $cookie_value = "ahmed malki";
// setcookie($cookie_name, $cookie_value, time() - (86400 * 30), "/"); 

// if(!isset($_COOKIE[$cookie_name])) 
//    { echo "opps " .$_COOKIE[$cookie_name] . "not set";}

// else {
//     echo "Cookie '" . $cookie_name . "' is set!<br>";
//     echo "Value is: " . $_COOKIE[$cookie_name];
// }
    