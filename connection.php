<?php

$con = mysqli_connect("localhost", "root", "", "clan");

if (!$con) {
    die("connection failed" . mysqli_connect_error());
}
