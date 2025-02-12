<?php

    $connection = mysqli_connect('localhost','root','root','book_db');
    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $guests = $_POST['guests'];
        $arrivials = $_POST['arrivials'];
        $leaving = $_POST['leaving'];
        // $name = $_POST['name'];

        $request = "insert into book_form(name, email, phone, address, location, guests, arrivials, leaving) values ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivials', '$leaving')";

        mysqli_query($connection, $request);

        header('location:book.php');
    }else{
        echo 'Something went wrong try again';
    }
?>