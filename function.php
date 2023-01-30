<?php
session_start();
require 'connection.php';

if (isset($_POST['delete'])) {
    $family_id = mysqli_real_escape_string($con, $_POST['delete']);
    $query = "DELETE FROM family WHERE id=' $family_id' ";
    $query_run = mysqli_query($con, $query);

    header("Location: index.php");
}

if (isset($_POST['update'])) {
    $family_id = mysqli_real_escape_string($con, $_POST['family_id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $address = mysqli_real_escape_string($con, $_POST['address']);

    $query = "UPDATE family SET name='$name', email='$email', address='$address' WHERE id='$family_id' ";
    $query_run = mysqli_query($con, $query);

    header("Location: index.php");
}

if (isset($_POST['save'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $address = mysqli_real_escape_string($con, $_POST['address']);

    $query = "INSERT INTO family (name,email,address) VALUES ('$name','$email','$address')";
    $query_run = mysqli_query($con, $query);

    header("Location: create.php");
    // You need to go back to see the update function
}
