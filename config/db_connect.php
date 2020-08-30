<?php
    
    require_once realpath(__DIR__ . "/../vendor/autoload.php");

    use Dotenv\Dotenv;

    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $user = $_ENV['USER_NAME'];
    $password = $_ENV['PASSWORD'];

    // connect to database
    $conn = mysqli_connect('localhost', "$user", "$password",'ninja_pizza');
    
    // check connection
    if(!$conn) {

        echo 'Connection error: ' . mysqli_connect_error();
    }