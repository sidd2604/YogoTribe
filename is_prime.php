<?php 

// API to check if a number is prime or not

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_GET['num'])) {
    $num = intval($_GET['num']);
    if ($num < 2) {
        echo json_encode(['is_prime' => false]);
        exit;
    }

    for($i = 2; $i <= sqrt($num); $i++){
        if($num % $i ==0){
            echo json_encode(['is_prime' =>false]);
            exit;
        }
    }
    
    echo json_encode(['is_prime' => true]);
    exit;
} else {
    echo json_encode(['error' => 'No number provided']);
}