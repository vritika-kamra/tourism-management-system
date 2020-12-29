<?php
require('paymentgate.php');
\Stripe\Stripe::setVerifySslCerts(false);
$token=$_POST['stripeToken'];
$data=\Stripe\Charge::create(array("amount"=>500,
"currency"=>"inr",
"description"=>"dummy payment gateway",
"source"=>$token,));

echo "<pre>";
print_r($data);
?>