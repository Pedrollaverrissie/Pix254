<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $email = htmlspecialchars($_POST["email"]);
    $amount= htmlspecialchars($_POST["amount"]);
     $currency = "KES";
}