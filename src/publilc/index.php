<?php

// require_once '../app/PaymentGateway/Stripe/Transaction.php';
// require_once '../app/Notification/Email.php';
// require_once '../app/PaymentGateway/Paddle/CustomerProfile.php';
// require_once '../app/PaymentGateway/Paddle/Transaction.php';

// spl_autoload_register(function($class) {
//     $class = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';
//     require $class;
//     var_dump($class);
// });

require __DIR__ . '/../vendor/autoload.php';

use App\PaymentGateway\Paddle\Transaction;
 
$paddleTransaction = new Transaction();

var_dump($paddleTransaction);